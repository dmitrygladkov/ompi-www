<?
$subject_val = "Re: [OMPI devel] [RFC] mca_base_select()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 18:04:05 2008" -->
<!-- isoreceived="20080506220405" -->
<!-- sent="Tue, 06 May 2008 16:03:51 -0600" -->
<!-- isosent="20080506220351" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] mca_base_select()" -->
<!-- id="C44631E7.510C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C32409D0-1A3E-4AE7-A352-F0E3C8FC956C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] mca_base_select()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 18:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3850.php">Ralph Castain: "[OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Previous message:</strong> <a href="3848.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3848.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3864.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent! Thanks Josh - both for the original work/commit and for the quick
<br>
fix!
<br>
<p>Ralph
<br>
<p><p>On 5/6/08 3:58 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry about that. Looking back at the filem logic it seems that I
</span><br>
<span class="quotelev1">&gt; returned success even if select failed (and just use the 'none'
</span><br>
<span class="quotelev1">&gt; passthrough component). I committed a patch in r18389 that fixes this
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit now has a warning that prints on the filem verbose stream
</span><br>
<span class="quotelev1">&gt; so if a user hits something like this in the wild unexpectedly then
</span><br>
<span class="quotelev1">&gt; we can help them debug it a bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 6, 2008, at 2:56 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm....well, I hit a problem (of course!). I have mca-no-build on
</span><br>
<span class="quotelev2">&gt;&gt; the filem
</span><br>
<span class="quotelev2">&gt;&gt; framework on my Mac. If I just mpriun -n 3 ./hello, I get the
</span><br>
<span class="quotelev2">&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   orte_filem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After looking at the source code for filem_select, I can run just
</span><br>
<span class="quotelev2">&gt;&gt; fine if I
</span><br>
<span class="quotelev2">&gt;&gt; specify -mca filem none on the cmd line. Otherwise, it looks like your
</span><br>
<span class="quotelev2">&gt;&gt; select logic insists that at least one component must be built and
</span><br>
<span class="quotelev2">&gt;&gt; selectable?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is that generally true, or is your filem framework the exception? I
</span><br>
<span class="quotelev2">&gt;&gt; think
</span><br>
<span class="quotelev2">&gt;&gt; this would not be a good general requirement - frankly, I don't
</span><br>
<span class="quotelev2">&gt;&gt; think it is
</span><br>
<span class="quotelev2">&gt;&gt; good for any framework to have such a requirement.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/6/08 12:09 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This has been committed in r18381
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know if you have any problems with this commit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 5, 2008, at 10:41 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Awesome.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The branch is updated to the latest trunk head. I encourage folks to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check out this repository and make sure that it builds on their
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system. A normal build of the branch should be enough to find out if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there are any cut-n-paste problems (though I tried to be careful,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mistakes do happen).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I haven't heard any problems so this is looking like it will come in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tomorrow after the teleconf. I'll ask again there to see if there
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any voices of concern.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 5, 2008, at 9:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This all sounds good to me!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 29, 2008, at 6:35 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What:  Add mca_base_select() and adjust frameworks &amp; components to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Why:   Consolidation of code for general goodness.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Where: <a href="https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play">https://svn.open-mpi.org/svn/ompi/tmp-public/jjh-mca-play</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When:  Code ready now. Documentation ready soon.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Timeout: May 6, 2008 (After teleconf) [1 week]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Discussion:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For a number of years a few developers have been talking about
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; creating a MCA base component selection function. For various
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reasons
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this was never implemented. Recently I decided to give it a try.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A base select function will allow Open MPI to provide completely
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; consistent selection behavior for many of its frameworks (18 of 31
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be exact at the moment). The primary goal of this work is to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; improving
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code maintainability through code reuse. Other benefits also
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; result
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; such as a slightly smaller memory footprint.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The mca_base_select() function represented the most commonly used
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; logic for component selection: Select the one component with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; highest priority and close all of the not selected components.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function can be found at the path below in the branch:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal/mca/base/mca_base_components_select.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To support this I had to formalize a query() function in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca_base_component_t of the form:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int mca_base_query_component_fn(mca_base_module_t **module, int
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *priority);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This function is specified after the open and close component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; functions in this structure as to allow compatibility with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; frameworks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that do not use the base selection logic. Frameworks that do *not*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this function are *not* effected by this commit. However, every
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component in the frameworks that use the mca_base_select function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; must
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; adjust their component query function to fit that specified above.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 18 frameworks in Open MPI have been changed. I have updated all of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; components in the 18 frameworks available in the trunk on my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The effected frameworks are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OPAL Carto
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OPAL crs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OPAL maffinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OPAL memchecker
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OPAL paffinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE errmgr
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE ess
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE Filem
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE grpcomm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE odls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE pml
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE ras
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE rmaps
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE routed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - ORTE snapc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OMPI crcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OMPI dpm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - OMPI pubsub
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There was a question of the memory footprint change as a result of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this commit. I used 'pmap' to determine process memory footprint
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hello world MPI program. Static and Shared build numbers are below
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; along with variations on launching locally and to a single node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allocated by SLURM. All of this was on Indiana University's Odin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; machine. We compare against the trunk (r18276) representing the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; last
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SVN sync point of the branch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Process(shared)| Trunk    | Branch  | Diff (Improvement)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  mpirun (orted) |   39976K |  36828K | 3148K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (0)      |  229288K | 229268K |   20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (1)      |  229288K | 229268K |   20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  mpirun         |   40032K |  37924K | 2108K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  orted          |   34720K |  34660K |   60K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (0)      |  228404K | 228384K |   20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (1)      |  228404K | 228384K |   20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Process(static)| Trunk    | Branch  | Diff (Improvement)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  mpirun (orted) |   21384K |  21372K |  12K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (0)      |  194000K | 193980K |  20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (1)      |  194000K | 193980K |  20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ---------------+----------+---------+-------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  mpirun         |   21384K |  21372K |  12K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  orted          |   21208K |  21196K |  12K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (0)      |  193116K | 193096K |  20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  hello (1)      |  193116K | 193096K |  20K
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As you can see there are some small memory footprint
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; improvements on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; my branch that result from this work. The size of the Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; project
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; shrinks a bit as well. This commit cuts between 3,500 and 2,000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lines
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of code (depending on how you count) so about a ~1% code shrink.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The branch is stable in all of the testing I have done, but there
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; some platforms on which I cannot test. So please give this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; branch a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; try and let me know if you find any problems.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="3850.php">Ralph Castain: "[OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>Previous message:</strong> <a href="3848.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3848.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3864.php">Pak Lui: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
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
