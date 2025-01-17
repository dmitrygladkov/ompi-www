<?
$subject_val = "Re: [OMPI users] Failing to MPI run on my linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 10:53:09 2014" -->
<!-- isoreceived="20140108155309" -->
<!-- sent="Wed, 8 Jan 2014 07:50:29 -0800" -->
<!-- isosent="20140108155029" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failing to MPI run on my linux cluster" -->
<!-- id="4D797DCA-8EF4-4B2A-B5D4-AF19F977CAC0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABsFK0RKdoPdeE9_rX9-bJ5u7skgFzUkbbJgQ=YqO==wUEf-6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Failing to MPI run on my linux cluster<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 10:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23336.php">Axel Vi�arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23334.php">Axel Vi&#240;arsson: "[OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>In reply to:</strong> <a href="23334.php">Axel Vi&#240;arsson: "[OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23336.php">Axel Vi�arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Reply:</strong> <a href="23336.php">Axel Vi�arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to your app as I don't know what it does. However, you *do* have to compile the example first! :-)
<br>
<p>A simple &quot;make&quot; in the examples directory will create all the binaries
<br>
<p><p>On Jan 8, 2014, at 7:29 AM, Axel Vi&#240;arsson &lt;axelvinna_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My cluster consist of 2 workstations with hyper threaded Intel Xeon processors and an old Dell dual core computer to control them.
</span><br>
<span class="quotelev1">&gt; I am failing to mpirun on the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.When executing as user
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [prufa_at_master]$ mpirun -np 16 --hostfile /home/prufa/prufa.mpi_hostfile fds_mpi SST1SV20.fds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process   0 of  15 is running .....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; forrtl: Permission denied
</span><br>
<span class="quotelev1">&gt; forrtl: severe (9): permission to access file denied, unit 4, file /share/apps/FDS/FDS6/FDS6/
</span><br>
<span class="quotelev1">&gt; Examples/Verkis/FDS6MPI_SST_1STEPVALUES_VEL_20.smv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Executing same command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; forrtl: severe (47): write to READONLY file, unit 4, file /share/apps/FDS/FDS6/FDS6/Examples/Verkis/FDS6MPI_SST_1STEPVALUES_VEL_20.smv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. When i try one of openmpi examples
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [prufa_at_master]$ mpirun -np 18 /share/apps/openmpi-1.6.5/
</span><br>
<span class="quotelev1">&gt; examples/hello_c.c 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev1">&gt; or execute an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: /share/apps/openmpi-1.6.5/examples/hello_c.c
</span><br>
<span class="quotelev1">&gt; Node: w0094.stofa.is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 18 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please could you guys help me with this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Axel
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23336.php">Axel Vi�arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23334.php">Axel Vi&#240;arsson: "[OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>In reply to:</strong> <a href="23334.php">Axel Vi&#240;arsson: "[OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23336.php">Axel Vi�arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Reply:</strong> <a href="23336.php">Axel Vi�arsson: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
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
