<?
$subject_val = "Re: [OMPI devel] Is trunk broken ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 16:21:46 2008" -->
<!-- isoreceived="20080619202146" -->
<!-- sent="Thu, 19 Jun 2008 23:21:29 +0300" -->
<!-- isosent="20080619202129" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is trunk broken ?" -->
<!-- id="485ABFC9.5050402_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4801307.DEB6%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Is trunk broken ?<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 16:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4188.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="4186.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4186.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4188.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4188.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did fresh check out and everything works well.
<br>
So looks like some svn up screw my svn.
<br>
Ralph, thanks for help !
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...something isn't right, Pasha. There is simply no way you should be
</span><br>
<span class="quotelev1">&gt; encountering this error. You are picking up the wrong grpcomm module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I went ahead and fixed the grpcomm/basic module, but as I note in the commit
</span><br>
<span class="quotelev1">&gt; message, that is now an experimental area. The grpcomm/bad module is the
</span><br>
<span class="quotelev1">&gt; default for that reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check to ensure you have the orte/mca/grpcomm/bad directory, and that it is
</span><br>
<span class="quotelev1">&gt; getting built. My guess is that you have a corrupted checkout or build and
</span><br>
<span class="quotelev1">&gt; that the component is either missing or not getting built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/19/08 1:37 PM, &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't find anything wrong so far. I'm waiting in a queue on Odin to try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there since Jeff indicated you are using rsh as a launcher, and that's the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only access I have to such an environment. Guess Odin is being pounded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because the queue isn't going anywhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;  I use ssh., here is command line:
</span><br>
<span class="quotelev2">&gt;&gt; ./bin/mpirun -np 2 -H sw214,sw214 -mca btl openib,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; ./osu_benchmarks-3.0/osu_latency
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meantime, I'm building on RoadRunner and will test there (TM enviro).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/19/08 1:18 PM, &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You'll have to tell us something more than that, Pasha. What kind of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment, what rev level were you at, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ahh, sorry :) I run on Linux x86_64 Sles10 sp1. (Open MPI) 1.3a1r18682M
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; , OFED 1.3.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pasha.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So far as I know, the trunk is fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 6/19/08 12:01 PM, &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I tried to run trunk on my machines and I got follow error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sw214:04367] [[16563,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; end of buffer in file base/grpcomm_base_modex.c at line 451
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sw214:04367] [[16563,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; end of buffer in file grpcomm_basic_module.c at line 560
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [sw214:04365]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   orte_grpcomm_modex failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4188.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="4186.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4186.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4188.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Reply:</strong> <a href="4188.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
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
