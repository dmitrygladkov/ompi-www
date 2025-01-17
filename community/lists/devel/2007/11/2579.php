<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 01:42:26 2007" -->
<!-- isoreceived="20071108064226" -->
<!-- sent="Thu, 8 Nov 2007 08:42:16 +0200" -->
<!-- isosent="20071108064216" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="20071108064216.GA4397_at_minantech.com" -->
<!-- charset="cp1255" -->
<!-- inreplyto="AE8A656A-E690-477D-A3A3-CC55FD09E10D_at_open-mpi.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 01:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2578.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2590.php">Andrew Friedley: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 07, 2007 at 09:07:23PM -0700, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Personally, I'd rather just not mark MPI completion until a local  
</span><br>
<span class="quotelev1">&gt; completion callback from the BTL.  But others don't like that idea, so  
</span><br>
<span class="quotelev1">&gt; we came up with a way for back pressure from the BTL to say &quot;it's not  
</span><br>
<span class="quotelev1">&gt; on the wire yet&quot;.  This is more complicated than just not marking MPI  
</span><br>
<span class="quotelev1">&gt; completion early, but why would we do something that helps real apps  
</span><br>
<span class="quotelev1">&gt; at the expense of benchmarks?  That would just be silly!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I fully agree with Brian here. Trying to solve the issue with current
<br>
approach will introduce additional checking in the fast path and will
<br>
only hurt real apps.
<br>
<p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2007, at 7:56 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does this mean that we don&#146;t have a queue to store btl level  
</span><br>
<span class="quotelev2">&gt; &gt; descriptors that
</span><br>
<span class="quotelev2">&gt; &gt;  are only partially complete ?  Do we do an all or nothing with  
</span><br>
<span class="quotelev2">&gt; &gt; respect to btl
</span><br>
<span class="quotelev2">&gt; &gt;  level requests at this stage ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Seems to me like we want to mark things complete at the MPI level  
</span><br>
<span class="quotelev2">&gt; &gt; ASAP, and
</span><br>
<span class="quotelev2">&gt; &gt;  that this proposal is not to do that &#150; is this correct ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rich
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 11/7/07 11:26 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 7, 2007, at 9:33 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Remember that this is all in the context of Galen's proposal for
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; btl_send() to be able to return NOT_ON_WIRE -- meaning that the  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; send
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; was successful, but it has not yet been sent (e.g., openib BTL
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; buffered it because it ran out of credits).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Sorry if I miss something obvious, but why does the PML has to be
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; aware
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; of the flow control situation of the BTL ? If the BTL cannot send
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; something right away for any reason, it should be the  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; responsibility
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; of
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the BTL to buffer it and to progress on it later.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's currently the way it is.  But the BTL currently only has the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; option to say two things:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. &quot;ok, done!&quot; -- then the PML will think that the request is  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. &quot;doh -- error!&quot; -- then the PML thinks that Something Bad
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Happened(tm)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What we really need is for the BTL to have a third option:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3. &quot;not done yet!&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So that the PML knows that the request is not yet done, but will  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other things to progress while we're waiting for it to complete.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Without this, the openib BTL currently replies &quot;ok, done!&quot;, even when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it has only buffered a message (rather than actually sending it out).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This optimization works great (yeah, I know...) except for apps that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; don't dip into the MPI library frequently.  :-\
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2578.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2590.php">Andrew Friedley: "Re: [OMPI devel] collective problems"</a>
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
