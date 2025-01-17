<?
$subject_val = "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 08:13:26 2011" -->
<!-- isoreceived="20110924121326" -->
<!-- sent="Sat, 24 Sep 2011 08:13:18 -0400" -->
<!-- isosent="20110924121318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*" -->
<!-- id="586FA97C-CDD7-4DD0-BB20-BA1C17087DDB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9Ggk5Aw3tX91NEcru1wJ5B3884k9PvYWR80FOBn8pw4UA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 08:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
<li><strong>Previous message:</strong> <a href="17426.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17426.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check the output from when you ran Open MPI's configure and &quot;make all&quot; -- did it decide to build the F77 interface?
<br>
<p>Also check that gcc and gfortran output .o files of the same bitness / type.
<br>
<p><p>On Sep 24, 2011, at 8:07 AM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; Compile and link - yes, but it turns out there was some unnoticed
</span><br>
<span class="quotelev1">&gt; compilation error because
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./hellompi: error while loading shared libraries: libmpi_f77.so.1:
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and this library does not exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/9/24 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Can you compile / link simple OMPI applications without this problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2011, at 7:54 AM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today I've verified this application on the Feroda 15 x86_64, where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm usually building OpenMPI from source using the same method.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Result: no link errors there! So, the issue is likely ubuntu-specific.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Target application is compiled linked with mpif90 pointing to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi_gcc-1.5.4/bin/mpif90 I built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding architectures, everything in target folders and OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ELF 64-bit LSB shared object, x86-64, version 1 (SYSV), dynamically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linked, not stripped
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/9/24 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How does the target application compile / link itself?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try running &quot;file&quot; on the Open MPI libraries and/or your target application .o files to see what their bitness is, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 22, 2011, at 3:15 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You're right because I also tried 1.4.3, and it's the same issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there. But what could be wrong? I'm using the simplest form -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../configure --prefix=/opt/openmpi_gcc-1.4.3/ and only installed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compilers are system-default gcc and gfortran 4.6.1. Distro is ubuntu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 11.10. There is no any mpi installed from packages, and no -m32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; options around. What else could be the source?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2011/9/22 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This usually means that you're mixing compiler/linker flags somehow (e.g., built something with 32 bit, built something else with 64 bit, try to link them together).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you verify that everything was built with all the same 32/64?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2011, at 1:21 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI 1.5.4 compiled with gcc 4.6.1 and linked with target app gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a load of linker messages like this one:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/ld: ../../lib/libutil.a(parallel_utilities.o)(.debug_info+0x529d):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; unresolvable R_X86_64_64 relocation against symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; `mpi_fortran_argv_null_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There are a lot of similar messages about other mpi_fortran_ symbols.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is it a known issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
<li><strong>Previous message:</strong> <a href="17426.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>In reply to:</strong> <a href="17426.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17463.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
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
