<?
$subject_val = "Re: [OMPI users] control openmpi or force to use pbs?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:06:15 2013" -->
<!-- isoreceived="20130206150615" -->
<!-- sent="Wed, 6 Feb 2013 15:06:04 +0000" -->
<!-- isosent="20130206150604" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] control openmpi or force to use pbs?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC9800_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11D38A68-ABCC-497D-BD18-F252B9C94C88_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] control openmpi or force to use pbs?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 10:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21316.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21317.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21317.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2013, at 5:11 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Thanks Reuti and Jeff, you are right, users should not be allowed to ssh to all nodes, which is how our cluster was set up: users can even password-less ssh to any node. I know this is not appropriate question in OpenMPI forum, but how can we setup so that user can only ssh (with password) to nodes that are allocated to them at the time of qsub'ing? I am still new to all of this cluster thing :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I even disallow this. Only admin staff is allowed to login to the nodes. This forces also the admin to look for a tight integration of the user's software into the queuing system.
</span><br>
<p><p>+1
<br>
<p>FWIW, that makes one-more-thing that you have to setup and maintain (because it doesn't happen by default -- you'd have to add some extra scripting in the ssh authentication stuff to enable that functionality).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21316.php">Gus Correa: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Previous message:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>In reply to:</strong> <a href="21314.php">Reuti: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21317.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
<li><strong>Reply:</strong> <a href="21317.php">Duke Nguyen: "Re: [OMPI users] control openmpi or force to use pbs?"</a>
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