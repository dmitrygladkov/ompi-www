<?
$subject_val = "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 13:26:25 2013" -->
<!-- isoreceived="20131122182625" -->
<!-- sent="Fri, 22 Nov 2013 11:26:24 -0700" -->
<!-- isosent="20131122182624" -->
<!-- name="Jason Gans" -->
<!-- email="jgans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI" -->
<!-- id="528FA1D0.2000800_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C49F51B6-BED5-4086-96A1-B38341F949AA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI<br>
<strong>From:</strong> Jason Gans (<em>jgans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 13:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>In reply to:</strong> <a href="23025.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/22/13 11:15 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2013, at 10:03 AM, Reuti &lt;reuti_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 22.11.2013 um 18:56 schrieb Jason Gans:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/22/13 10:47 AM, Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 22.11.2013 um 17:32 schrieb Gans, Jason D:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would like to run an instance of my application on every *core* 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of a small cluster. I am using Torque 2.5.12 to run jobs on the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster. The cluster in question is a heterogeneous collection of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machines that are all past their prime. Specifically, the number 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of cores ranges from 2-8. Here is the Torque &quot;nodes&quot; file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0000 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0001 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0002 np=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0003 np=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0004 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0005 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0006 np=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0007 np=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I use openmpi-1.6.3, I can oversubscribe nodes but the tasks 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are allocated to nodes without regard to the number of cores on 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each node (specified by the &quot;np=xx&quot; in the nodes file). For 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; example, when I run &quot;mpirun -np 24 hostname&quot;, mpirun places three 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; instances of &quot;hostname&quot; on each node, despite the fact that some 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes only have two processors and some have more.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You submitted the job itself by requesting 24 cores for it too?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since there are only 8 Torque nodes in the cluster, I submitted the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job by requesting 8 nodes, i.e. &quot;qsub -I -l nodes=8&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, AFAICT it's necessary to request there 24 too. To investigate it 
</span><br>
<span class="quotelev2">&gt;&gt; further it would also be good to copy the $PBS_NODEFILE in your job 
</span><br>
<span class="quotelev2">&gt;&gt; script for later inspection to your home directory. I.e. whether you 
</span><br>
<span class="quotelev2">&gt;&gt; are getting the correct values there already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really - we take the number of slots on each node and add them 
</span><br>
<span class="quotelev1">&gt; together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question: is that a copy/paste of the actual PBS_NODEFILE? It doesn't 
</span><br>
<span class="quotelev1">&gt; look right to me - there is supposed to be one node entry for each 
</span><br>
<span class="quotelev1">&gt; slot. In other words, it should have looked like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n0000
</span><br>
<span class="quotelev2">&gt;&gt; n0000
</span><br>
<span class="quotelev2">&gt;&gt; n0001
</span><br>
<span class="quotelev2">&gt;&gt; n0001
</span><br>
<span class="quotelev2">&gt;&gt; n0002
</span><br>
<span class="quotelev2">&gt;&gt; n0002
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
That is what I expected -- however, the $PBS_NODEFILE lists each node 
<br>
just once.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to have OpenMPI &quot;gracefully&quot; oversubscribe nodes by 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocating instances based on the &quot;np=xx&quot; information in the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Torque nodes file? It this a Torque problem?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; p.s. I do get the desired behavior when I run *without* Torque and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specify the following machine file to mpirun:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0000 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0001 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0002 slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0003 slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0004 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0005 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0006 slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n0007 slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23027.php">Reuti: "Re: [OMPI users] Request for help/suggestion"</a>
<li><strong>In reply to:</strong> <a href="23025.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23029.php">Ralph Castain: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
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
