<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 09:33:53 2013" -->
<!-- isoreceived="20131106143353" -->
<!-- sent="Wed, 6 Nov 2013 15:33:52 +0100" -->
<!-- isosent="20131106143352" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released" -->
<!-- id="CALT_uBTkeJsmXYXAO_GkXV0jJDH=JRnJof0VmDDUt_hH-Usevw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 09:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3967.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>Previous message:</strong> <a href="3965.php">Jeff Squyres (jsquyres): "[hwloc-devel] late git commit email"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3967.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>Reply:</strong> <a href="3967.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>lots of useful features!
<br>
<p>I would like to check if there is a plan to include in 1.8 proposed feature
<br>
for hwloc-distrib to start distribution from the last object.
<br>
<p>For the reference please see my e-mail from Wed, Sep 18, 2013 with the
<br>
Subject
<br>
<p>Patch file to let hwloc-distrib output the PUs starting from the last object
<br>
<p>I would really appreciate if you can include it into the 1.8 version.
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<p>On Wed, Nov 6, 2013 at 3:06 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate for v1.8:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.8rc1 is the first milestone of a major feature release.
</span><br>
<span class="quotelev1">&gt; It adds PCI discovery on Linux without dependencies on external libs,
</span><br>
<span class="quotelev1">&gt; a new API to manipulate differences between very similar topologies,
</span><br>
<span class="quotelev1">&gt; multiple improvements to command-line tools, and more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * New components
</span><br>
<span class="quotelev1">&gt;   + Add the &quot;linuxpci&quot; component that always works on Linux even when
</span><br>
<span class="quotelev1">&gt;     libpciaccess and libpci aren't available (and even with a modified
</span><br>
<span class="quotelev1">&gt;     file-system root). By default the old &quot;pci&quot; component runs first
</span><br>
<span class="quotelev1">&gt;     because &quot;linuxpci&quot; lacks device names (obj-&gt;name is always NULL).
</span><br>
<span class="quotelev1">&gt; * API
</span><br>
<span class="quotelev1">&gt;   + Add the topology difference API in hwloc/diff.h for manipulating
</span><br>
<span class="quotelev1">&gt;     many similar topologies.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_topology_dup() for duplicating an entire topology.
</span><br>
<span class="quotelev1">&gt;   + hwloc.h and hwloc/helper.h have been reorganized to clarify the
</span><br>
<span class="quotelev1">&gt;     documentation sections. The actual inline code has moved out of hwloc.h
</span><br>
<span class="quotelev1">&gt;     into the new hwloc/inlines.h.
</span><br>
<span class="quotelev1">&gt;   + Deprecated functions are now in hwloc/deprecated.h, and not in the
</span><br>
<span class="quotelev1">&gt;     official documentation anymore.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + Add hwloc-diff and hwloc-patch tools together with the new diff API.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc-compress-dir to (de)compress an entire directory of XML files
</span><br>
<span class="quotelev1">&gt;     using hwloc-diff and hwloc-patch.
</span><br>
<span class="quotelev1">&gt;   + Object colors in the graphical output of lstopo may be changed by
</span><br>
<span class="quotelev1">&gt; adding
</span><br>
<span class="quotelev1">&gt;     a &quot;lstopoStyle&quot; info attribute. See CUSTOM COLORS in the lstopo(1)
</span><br>
<span class="quotelev1">&gt; manpage
</span><br>
<span class="quotelev1">&gt;     for details. Thanks to Jirka Hladky for discussing the idea.
</span><br>
<span class="quotelev1">&gt;   + hwloc-gather-topology may now gather I/O-related files on Linux when
</span><br>
<span class="quotelev1">&gt;     --io is given. Only the linuxpci component supports discovering I/O
</span><br>
<span class="quotelev1">&gt;     objects from these extended tarballs.
</span><br>
<span class="quotelev1">&gt;   + hwloc-annotate now supports --ri to remove/replace info attributes with
</span><br>
<span class="quotelev1">&gt;     a given name.
</span><br>
<span class="quotelev1">&gt;   + hwloc-info supports &quot;root&quot; and &quot;all&quot; special locations for dumping
</span><br>
<span class="quotelev1">&gt;     information about the root object.
</span><br>
<span class="quotelev1">&gt;   + lstopo now supports --append-legend to append custom lines of text
</span><br>
<span class="quotelev1">&gt;     to the legend in the graphical output. Thanks to Jirka Hladky for
</span><br>
<span class="quotelev1">&gt;     discussing the idea.
</span><br>
<span class="quotelev1">&gt;   + hwloc-calc and friends have a more robust parsing of locations given
</span><br>
<span class="quotelev1">&gt;     on the command-line and they report useful error messages about it.
</span><br>
<span class="quotelev1">&gt;   + Add --whole-system to hwloc-bind, hwloc-calc, hwloc-distances and
</span><br>
<span class="quotelev1">&gt;     hwloc-distrib, and add --restrict to hwloc-bind for uniformity among
</span><br>
<span class="quotelev1">&gt;     tools.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt;   + Calling hwloc_topology_load() or hwloc_topology_set_*() on an already
</span><br>
<span class="quotelev1">&gt;     loaded topology now returns an error (deprecated since release 1.6.1).
</span><br>
<span class="quotelev1">&gt;   + Fix the initialisation of cpusets and nodesets in Group objects added
</span><br>
<span class="quotelev1">&gt;     when inserting PCI hostbridges.
</span><br>
<span class="quotelev1">&gt;   + Never merge Group objects that were added explicitly by the user with
</span><br>
<span class="quotelev1">&gt;     hwloc_custom_insert_group_object_by_parent().
</span><br>
<span class="quotelev1">&gt;   + Add a sanity check during dynamic plugin loading to prevent some
</span><br>
<span class="quotelev1">&gt;     crashes when hwloc is dynamically loaded by another plugin mechanisms.
</span><br>
<span class="quotelev1">&gt;   + Add --with-hwloc-plugins-path to specify the install/load directories
</span><br>
<span class="quotelev1">&gt;     of plugins.
</span><br>
<span class="quotelev1">&gt;   + Add the MICSerialNumber info attribute to the root object when running
</span><br>
<span class="quotelev1">&gt;     hwloc inside a Xeon Phi to match the same attribute in the MIC OS
</span><br>
<span class="quotelev1">&gt; device
</span><br>
<span class="quotelev1">&gt;     when running in the host.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-announce mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3966/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3967.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>Previous message:</strong> <a href="3965.php">Jeff Squyres (jsquyres): "[hwloc-devel] late git commit email"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3967.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
<li><strong>Reply:</strong> <a href="3967.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.8rc1 released"</a>
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
