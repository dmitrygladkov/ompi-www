<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 09:54:07 2007" -->
<!-- isoreceived="20070627135407" -->
<!-- sent="Wed, 27 Jun 2007 07:53:56 -0600" -->
<!-- isosent="20070627135356" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="D599A744-1C95-4B99-BFD3-DB7536E207E1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46825A61.9070503_at_sun.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 09:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
THe function name changes are pretty obvious (s/mca_pml_base/ompi/),  
<br>
and I thought I'd try something new and actually document the  
<br>
interface in the header file :).  So we should be good on that front.
<br>
<p>Brian
<br>
<p>On Jun 27, 2007, at 6:38 AM, Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt; I am ok with the following as long as we can have some sort of
</span><br>
<span class="quotelev1">&gt; documenation describing what changed like which old functions
</span><br>
<span class="quotelev1">&gt; are replaced with newer functions and any description of changed
</span><br>
<span class="quotelev1">&gt; assumptions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 26, 2007, at 6:08 PM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some time ago you were working on moving the modex out of the pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and cleaning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it up a bit. Is this work still ongoing? The reason I ask is that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently working on integrating the RSL, and would rather build on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code rather than the old...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prins brings up a point I keep meaning to ask the group about.  A
</span><br>
<span class="quotelev2">&gt;&gt; long time ago in a galaxy far, far away (aka, last fall), Galen and I
</span><br>
<span class="quotelev2">&gt;&gt; started working on the BTL / PML redesign that morphed into some
</span><br>
<span class="quotelev2">&gt;&gt; smaller changes, including some interesting IB work.  Anyway, I
</span><br>
<span class="quotelev2">&gt;&gt; rewrote large chunks of the modex, which did a couple of things:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Moved the modex out of the pml base and into the general OMPI code
</span><br>
<span class="quotelev2">&gt;&gt; (renaming
</span><br>
<span class="quotelev2">&gt;&gt;   the functions in the process)
</span><br>
<span class="quotelev2">&gt;&gt; * Fixed the hang if a btl doesn't publish contact information (we
</span><br>
<span class="quotelev2">&gt;&gt; wait until we
</span><br>
<span class="quotelev2">&gt;&gt;   receive a key pushed into the modex at the end of MPI_INIT)
</span><br>
<span class="quotelev2">&gt;&gt; * Tried to reduce the number of required memory copies in the  
</span><br>
<span class="quotelev2">&gt;&gt; interface
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's a fairly big change, in that all the BTLs have to be updated due
</span><br>
<span class="quotelev2">&gt;&gt; to the function name differences.  It's fairly well tested, and would
</span><br>
<span class="quotelev2">&gt;&gt; be really nice for dealing with platforms where there are different
</span><br>
<span class="quotelev2">&gt;&gt; networks on different machines.  If no one has any objections, I'll
</span><br>
<span class="quotelev2">&gt;&gt; probably do this next week...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1778.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
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
