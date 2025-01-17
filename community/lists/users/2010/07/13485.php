<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 16:19:15 2010" -->
<!-- isoreceived="20100706201915" -->
<!-- sent="Tue, 6 Jul 2010 14:19:05 -0600" -->
<!-- isosent="20100706201905" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="BA082154-6657-47AD-ABA1-1FA7AEA56732_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="70424.59517.qm_at_web80803.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Hangs, No Error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 16:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the remote daemon is starting - is there a firewall in the way?
<br>
<p>On Jul 6, 2010, at 2:04 PM, Robert Walters wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4.2 on RHEL. I have a cluster of AMD Opteron's and right now I am just working on getting OpenMPI itself up and running. I have a successful configure and make all install. LD_LIBRARY_PATH and PATH variables were correctly edited. mpirun -np 8 hello_c successfully works on all machines. I have setup my two test machines with DSA key pairs that successfully work with each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem comes when I initiate my hostfile to attempt to communicate across machines. The hostfile is setup correctly with &lt;host_name&gt; &lt;slots&gt; &lt;max-slots&gt;. When running with all verbose options enabled &quot;mpirun --mca plm_base_verbose 99 --debug-daemons --mca btl_base_verbose 30 --mca oob_base_verbose 99 --mca pml_base_verbose 99 -hostfile hostfile -np 16 hello_c&quot; I receive the following text output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component rsh has no register function
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev1">&gt; [machine1:03578] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; Daemon was launched on machine2- beginning to initialize
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev1">&gt; [machine2:01962] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; Daemon [[1418,0],1] checking in as pid 1962 on host machine2
</span><br>
<span class="quotelev1">&gt; Daemon [[1418,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point the system hangs indefinitely. While running top on the machine2 terminal, I see several things come up briefly. These items are: sshd (root), tcsh (myuser), orted (myuser), and mcstransd (root). I was wondering if sshd needs to be initiated by myuser? It is currently turned off in sshd_config through UsePAM yes. This was setup by the sysadmin but it can be worked around if this is necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So in summary, mpirun works on each machine individually, but hangs when initiated through a hostfile or with the -host flag. ./configure with defaults and --prefix. LD_LIBRARY_PATH and PATH set up correctly. Any help is appreciated. Thanks!
</span><br>
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13484.php">Robert Walters: "[OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13486.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
