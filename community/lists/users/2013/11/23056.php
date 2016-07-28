<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 11:53:10 2013" -->
<!-- isoreceived="20131125165310" -->
<!-- sent="Mon, 25 Nov 2013 11:53:09 -0500" -->
<!-- isosent="20131125165309" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="99206666-F76C-45C4-8399-E35C12DF45E6_at_fmglobal.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="EE8E968D-E1F3-42A7-A23A-4F26CE14B226_at_fmglobal.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)<br>
<strong>From:</strong> Meredith, Karl (<em>karl.meredith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 11:53:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23057.php">David Whitaker: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23055.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23055.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Digging a little deeper by running the code in the lldb debugger, I found that the stall occurs in a call to init_orte from ompi_mpi_init.c:
<br>
&nbsp;&nbsp;&nbsp;356     /* Setup ORTE - note that we are an MPI process  */
<br>
&nbsp;&nbsp;&nbsp;357     if (ORTE_SUCCESS != (ret = orte_init(NULL, NULL, ORTE_PROC_MPI))) {
<br>
&nbsp;&nbsp;&nbsp;358         error = &quot;ompi_mpi_init: orte_init failed&quot;;
<br>
&nbsp;&nbsp;&nbsp;359         goto error;
<br>
&nbsp;&nbsp;&nbsp;360     }
<br>
<p>The code never returns from orte_init.
<br>
<p>It gets stuck in orte_ess.init() called from orte_init.c:
<br>
&nbsp;&nbsp;&nbsp;126     /* initialize the RTE for this environment */
<br>
&nbsp;&nbsp;&nbsp;127     if (ORTE_SUCCESS != (ret = orte_ess.init())) {
<br>
<p>When I step through this orte_ess_init in the lldb debugger, I actually get some output from the code (no output if not using the debugger and stepping through):
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128) instead of &quot;Success&quot; (0)
<br>
<p><p><p>Karl
<br>
<p><p><p>On Nov 25, 2013, at 9:20 AM, Meredith, Karl &lt;karl.meredith_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here&#146;s the back trace from lldb:
</span><br>
<span class="quotelev1">&gt; $ )ps -elf | grep  hello
</span><br>
<span class="quotelev1">&gt; 1042653210 45231 45230     4006   0  31  0  2448976   2148 -      S+                  0 ttys002    0:00.01 hello_cxx         9:07AM
</span><br>
<span class="quotelev1">&gt; 1042653210 45232 45230     4006   0  31  0  2457168   2156 -      S+                  0 ttys002    0:00.04 hello_cxx         9:07AM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (meredithk_at_meredithk-mac)-(09:15 AM Mon Nov 25)-(~/tools/openmpi-1.6.5/examples)
</span><br>
<span class="quotelev1">&gt; $ )lldb -p 45231
</span><br>
<span class="quotelev1">&gt; Attaching to process with:
</span><br>
<span class="quotelev1">&gt;    process attach -p 45231
</span><br>
<span class="quotelev1">&gt; Process 45231 stopped
</span><br>
<span class="quotelev1">&gt; Executable module set to &quot;/Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx&quot;.
</span><br>
<span class="quotelev1">&gt; Architecture set to: x86_64-apple-macosx.
</span><br>
<span class="quotelev1">&gt; (lldb) bt
</span><br>
<span class="quotelev1">&gt; * thread #1: tid = 0x168535, 0x00007fff8c1859aa libsystem_kernel.dylib`select$DARWIN_EXTSN + 10, queue = 'com.apple.main-thread, stop reason = signal SIGSTOP
</span><br>
<span class="quotelev1">&gt;    frame #0: 0x00007fff8c1859aa libsystem_kernel.dylib`select$DARWIN_EXTSN + 10
</span><br>
<span class="quotelev1">&gt;    frame #1: 0x0000000106b73ea0 libmpi.1.dylib`select_dispatch(base=0x00007f84c3c0b430, arg=0x00007f84c3c0b3e0, tv=0x00007fff5924ca70) + 80 at select.c:174
</span><br>
<span class="quotelev1">&gt;    frame #2: 0x0000000106b3eb0f libmpi.1.dylib`opal_event_base_loop(base=0x00007f84c3c0b430, flags=5) + 415 at event.c:838
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both processors are at this state.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here&#146;s the output from otool -L ./hello_cxx:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ )otool -L ./hello_cxx
</span><br>
<span class="quotelev1">&gt; ./hello_cxx:
</span><br>
<span class="quotelev1">&gt; 	/Users/meredithk/tools/openmpi/lib/libmpi_cxx.1.dylib (compatibility version 2.0.0, current version 2.2.0)
</span><br>
<span class="quotelev1">&gt; 	/Users/meredithk/tools/openmpi/lib/libmpi.1.dylib (compatibility version 2.0.0, current version 2.8.0)
</span><br>
<span class="quotelev1">&gt; 	/opt/local/lib/libgcc/libstdc++.6.dylib (compatibility version 7.0.0, current version 7.18.0)
</span><br>
<span class="quotelev1">&gt; 	/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 1197.1.1)
</span><br>
<span class="quotelev1">&gt; 	/opt/local/lib/libgcc/libgcc_s.1.dylib (compatibility version 1.0.0, current version 1.0.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 9:14 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mac OS X 1.9 dropped support for gdb. Please report the output of lldb instead.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, can you run &#147;otool -L ./hello_cxx&#148; and report the output.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 15:09 , Meredith, Karl &lt;karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do have DYLD_LIBRARY_PATH set to the same paths as LD_LIBRARY_PATH.  This does not resolve the problem.  The code still hangs on MPI::Init().
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another thing I tried is I recompiled openmpi with the debug flags activated:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=$HOME/tools/openmpi --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, I attached to the running process using gdb.  I tried to do a back trace and see where it was hanging up at, but all I got was this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attaching to process 45231
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading symbols from /Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx...Reading symbols from /Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx.dSYM/Contents/Resources/DWARF/hello_cxx...done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x00007fff8c1859aa in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fff8c1859aa in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x0000000106b73ea0 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x706d6e65706f2f2f in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x0000000000000001 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This output from gdb was not terribly helpful to me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 25, 2013, at 8:30 AM, Hammond, Simon David (-EXP) &lt;sdhammo_at_[hidden]&lt;mailto:sdhammo_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have occasionally had a problem like this when we set LD_LIBRARY_PATH only. On OSX you may need to set DYLD_LIBRARY_PATH instead ( set it to the same lib directory )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try that and see if it resolves the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Si Hammond
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remote Connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Meredith, Karl [karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, November 25, 2013 06:25 AM Mountain Standard Time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [EXTERNAL] Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do have these two environment variables set:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/Users/meredithk/tools/openmpi/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running mpirun seems to work fine with a simple command, like hostname:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ )mpirun -n 2 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run the simple hello_cxx example from the openmpi distribution, compiled as such:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic++ -g    hello_cxx.cc   -o hello_cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It compiles fine, without warning or error.  However, when I go to run the example, it stalls on the MPI::Init() command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 hello_cxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It never errors out or crashes.  It simply hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using the same mpic++ and mpirun version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ )which mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ )which mpic++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpic++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not quite sure what else to check.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Strange - I run on Mavericks now without problem. Can you run &quot;mpirun -n 1 hostname&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You also might want to check your PATH and LD_LIBRARY_PATH to ensure you have the prefix where you installed OMPI 1.6.5 at the front. Mac distributes a very old version of OMPI with its software and you don't want to pick it up by mistake.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8 to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with gcc 4.8 (gcc installed from macports).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi compiled and installed without error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, when I try to run any of the example test cases, the code gets stuck inside the first MPI::Init() call and never returns.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any thoughts on what might be going wrong?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The same install on OS 10.8 works fine and the example test cases run without error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23057.php">David Whitaker: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23055.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23055.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23116.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>