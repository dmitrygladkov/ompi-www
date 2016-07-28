<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 14:21:33 2007" -->
<!-- isoreceived="20070627182133" -->
<!-- sent="Wed, 27 Jun 2007 13:21:02 -0500" -->
<!-- isosent="20070627182102" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM Job Issues" -->
<!-- id="4682AA8E.2010004_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="88FFB519-3622-4071-B4DB-909C4657BA1E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 14:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff,
<br>
<p>Finally got my test nodes back and was looking at the info you sent. On 
<br>
the SLURM page, it states the following:
<br>
<p>*Open MPI* &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt; relies upon SLURM to allocate 
<br>
resources for the job and then mpirun to initiate the tasks. When using 
<br>
salloc command, mpirun's -nolocal option is recommended. For example:
<br>
<p>$ salloc -n4 sh    # allocates 4 processors and spawns shell for job
<br>
<span class="quotelev1">&gt; mpirun -np 4 -nolocal a.out
</span><br>
<span class="quotelev1">&gt; exit          # exits shell spawned by initial salloc command
</span><br>
<p>You are saying that I need to use the slurm salloc, then pass SLURM a 
<br>
script? Or could I just add it all into the script? Fro eaample:
<br>
<p>#!/bin/sh
<br>
salloc -n4
<br>
mpirun my_mpi_application
<br>
<p>Then, run with srun -b myscript.sh
<br>
<p><p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
(479) 575 - 4590
<br>
<a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
<br>
<p>&quot;A supercomputer is a device for turning compute-bound
<br>
problems into I/O-bound problems.&quot; -Seymour Cray
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ick; I'm surprised that we don't have this info on the FAQ.  I'll try  
</span><br>
<span class="quotelev1">&gt; to rectify that shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are you launching your jobs through SLURM?  OMPI currently does  
</span><br>
<span class="quotelev1">&gt; not support the &quot;srun -n X my_mpi_application&quot; model for launching  
</span><br>
<span class="quotelev1">&gt; MPI jobs.  You must either use the -A option to srun (i.e., get an  
</span><br>
<span class="quotelev1">&gt; interactive SLURM allocation) or use the -b option (submit a script  
</span><br>
<span class="quotelev1">&gt; that runs on the first node in the allocation).  Your script can be  
</span><br>
<span class="quotelev1">&gt; quite short:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; mpirun my_mpi_application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that OMPI will automatically figure out how many cpu's are in  
</span><br>
<span class="quotelev1">&gt; your SLURM allocation, so you don't need to specify &quot;-np X&quot;.  Hence,  
</span><br>
<span class="quotelev1">&gt; you can run the same script without modification no matter how many  
</span><br>
<span class="quotelev1">&gt; cpus/nodes you get from SLURM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's on the long-term plan to get &quot;srun -n X my_mpi_application&quot;  
</span><br>
<span class="quotelev1">&gt; model to work; it just hasn't bubbled up high enough in the priority  
</span><br>
<span class="quotelev1">&gt; stack yet... :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 20, 2007, at 1:59 PM, Jeff Pummill wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Just started working with OpenMPI / SLURM combo this morning. I can  
</span><br>
<span class="quotelev2">&gt;&gt; successfully launch this job from the command line and it runs to  
</span><br>
<span class="quotelev2">&gt;&gt; completion, but when launching from SLURM they hang.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They appear to just sit with no load apparent on the compute nodes  
</span><br>
<span class="quotelev2">&gt;&gt; even though SLURM indicates they are running...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jpummil_at_trillion ~]$ sinfo -l
</span><br>
<span class="quotelev2">&gt;&gt; Wed Jun 20 12:32:29 2007
</span><br>
<span class="quotelev2">&gt;&gt; PARTITION AVAIL  TIMELIMIT   JOB_SIZE ROOT SHARE     GROUPS   
</span><br>
<span class="quotelev2">&gt;&gt; NODES       STATE NODELIST
</span><br>
<span class="quotelev2">&gt;&gt; debug*       up   infinite 1-infinite   no    no        all       
</span><br>
<span class="quotelev2">&gt;&gt; 8   allocated compute-1-[1-8]
</span><br>
<span class="quotelev2">&gt;&gt; debug*       up   infinite 1-infinite   no    no        all       
</span><br>
<span class="quotelev2">&gt;&gt; 1        idle compute-1-0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jpummil_at_trillion ~]$ squeue -l
</span><br>
<span class="quotelev2">&gt;&gt; Wed Jun 20 12:32:20 2007
</span><br>
<span class="quotelev2">&gt;&gt;   JOBID PARTITION     NAME     USER    STATE       TIME TIMELIMIT   
</span><br>
<span class="quotelev2">&gt;&gt; NODES NODELIST(REASON)
</span><br>
<span class="quotelev2">&gt;&gt;      79     debug   mpirun  jpummil  RUNNING       5:27  
</span><br>
<span class="quotelev2">&gt;&gt; UNLIMITED      2 compute-1-[1-2]
</span><br>
<span class="quotelev2">&gt;&gt;      78     debug   mpirun  jpummil  RUNNING       5:58  
</span><br>
<span class="quotelev2">&gt;&gt; UNLIMITED      2 compute-1-[3-4]
</span><br>
<span class="quotelev2">&gt;&gt;      77     debug   mpirun  jpummil  RUNNING       7:00  
</span><br>
<span class="quotelev2">&gt;&gt; UNLIMITED      2 compute-1-[5-6]
</span><br>
<span class="quotelev2">&gt;&gt;      74     debug   mpirun  jpummil  RUNNING      11:39  
</span><br>
<span class="quotelev2">&gt;&gt; UNLIMITED      2 compute-1-[7-8]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there any known issues of this nature involving OpenMPI and SLURM?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff F. Pummill
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3551/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3550.php">Brian Barrett: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3552.php">Tim Prins: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
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