<?
$subject_val = "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 05:43:15 2015" -->
<!-- isoreceived="20150524094315" -->
<!-- sent="Sun, 24 May 2015 19:43:10 +1000" -->
<!-- isosent="20150524094310" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine" -->
<!-- id="CAKY4v98tG26s+bTMg3GppnUyxsHGhtF2wT6sOdATwUCe9M-CJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sHjDFzsvrmRo28zMx6VXDte5FSPTyM4AdRwi0DhW_LxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-24 05:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26913.php">Xavier Besseron: "[OMPI users] Fwd: Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26911.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>In reply to:</strong> <a href="26911.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Gilles
<br>
<p>On Sun, May 24, 2015 at 7:41 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; yes, that is clearly suboptimal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the optimal option is something like -bind-to hwthreads
</span><br>
<span class="quotelev1">&gt; (I am afk so I cannot confirm this)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, May 24, 2015, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much for your respond. But if I oversubscribe, would the
</span><br>
<span class="quotelev2">&gt;&gt; performance be influenced?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, May 24, 2015 at 7:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Xing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iirc, open MPI default behavior is to bind to cores (vs hyperthreads),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence the error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot remember the option to bind to threads, but you can mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --oversubscribe if you are currently stuck
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sunday, May 24, 2015, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, OPENMPI users,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have met some problem while doing experiments on Amazon EC2. I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; chosen instance type r3.2xlarge. As amazon claimed, it has 8 vcpu. Each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vCPU is a hyperthread of an Intel Xeon core for M3, C4, C3, R3, HS1, G2,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I2, and D2. (from *<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>&gt;)*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, when I try to run experiments on 4 machines, each with 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slots. OPENMPI reminds me that I am oversubscribing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone know the reason? Thanks in advance!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26909.php">http://www.open-mpi.org/community/lists/users/2015/05/26909.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Xing FENG
</span><br>
<span class="quotelev2">&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt;&gt; Database Research Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev2">&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26911.php">http://www.open-mpi.org/community/lists/users/2015/05/26911.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards.
---
Xing FENG
PhD Candidate
Database Research Group
School of Computer Science and Engineering
University of New South Wales
NSW 2052, Sydney
Phone: (+61) 413 857 288
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26913.php">Xavier Besseron: "[OMPI users] Fwd: Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="26911.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>In reply to:</strong> <a href="26911.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
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
