<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Interoperability with Linux libnuma unsigned long masks</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gae577962390f84b0b12f503314ab0f972"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00103.php#gae577962390f84b0b12f503314ab0f972">hwloc_cpuset_to_linux_libnuma_ulongs</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, unsigned long *mask, unsigned long *maxnode)</td></tr>
<tr class="separator:gae577962390f84b0b12f503314ab0f972"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga585ccf818d2f217f4e53f9c6506c3128"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00103.php#ga585ccf818d2f217f4e53f9c6506c3128">hwloc_nodeset_to_linux_libnuma_ulongs</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset, unsigned long *mask, unsigned long *maxnode)</td></tr>
<tr class="separator:ga585ccf818d2f217f4e53f9c6506c3128"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga0e9d051e068940f722f6fdc61814149d"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00103.php#ga0e9d051e068940f722f6fdc61814149d">hwloc_cpuset_from_linux_libnuma_ulongs</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> cpuset, const unsigned long *mask, unsigned long maxnode)</td></tr>
<tr class="separator:ga0e9d051e068940f722f6fdc61814149d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gad8491c672eb2594cc5e7b0a026867192"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00103.php#gad8491c672eb2594cc5e7b0a026867192">hwloc_nodeset_from_linux_libnuma_ulongs</a> (<a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00073.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a> nodeset, const unsigned long *mask, unsigned long maxnode)</td></tr>
<tr class="separator:gad8491c672eb2594cc5e7b0a026867192"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>This interface helps converting between Linux libnuma unsigned long masks and hwloc cpusets and nodesets.</p>
<p>It also offers a consistent behavior on non-NUMA machines or non-NUMA-aware kernels by assuming that the machines have a single NUMA node.</p>
<dl class="section note"><dt>Note</dt><dd>Topology <code>topology</code> must match the current machine.</dd>
<dd>
The behavior of libnuma is undefined if the kernel is not NUMA-aware. (when CONFIG_NUMA is not set in the kernel configuration). This helper and libnuma may thus not be strictly compatible in this case, which may be detected by checking whether numa_available() returns -1. </dd></dl>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga0e9d051e068940f722f6fdc61814149d"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_cpuset_from_linux_libnuma_ulongs </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const unsigned long *&#160;</td>
          <td class="paramname"><em>mask</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long&#160;</td>
          <td class="paramname"><em>maxnode</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert the array of unsigned long <code>mask</code> into hwloc CPU set. </p>
<p><code>mask</code> is a array of unsigned long that will be read. <code>maxnode</code> contains the maximal node number that may be read in <code>mask</code>.</p>
<p>This function may be used after calling get_mempolicy or any other function that takes an array of unsigned long as output parameter (and possibly a maximal node number as input parameter). </p>

</div>
</div>
<a class="anchor" id="gae577962390f84b0b12f503314ab0f972"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_cpuset_to_linux_libnuma_ulongs </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long *&#160;</td>
          <td class="paramname"><em>mask</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long *&#160;</td>
          <td class="paramname"><em>maxnode</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert hwloc CPU set <code>cpuset</code> into the array of unsigned long <code>mask</code>. </p>
<p><code>mask</code> is the array of unsigned long that will be filled. <code>maxnode</code> contains the maximal node number that may be stored in <code>mask</code>. <code>maxnode</code> will be set to the maximal node number that was found, plus one.</p>
<p>This function may be used before calling set_mempolicy, mbind, migrate_pages or any other function that takes an array of unsigned long and a maximal node number as input parameter. </p>

</div>
</div>
<a class="anchor" id="gad8491c672eb2594cc5e7b0a026867192"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_nodeset_from_linux_libnuma_ulongs </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const unsigned long *&#160;</td>
          <td class="paramname"><em>mask</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long&#160;</td>
          <td class="paramname"><em>maxnode</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert the array of unsigned long <code>mask</code> into hwloc NUMA node set. </p>
<p><code>mask</code> is a array of unsigned long that will be read. <code>maxnode</code> contains the maximal node number that may be read in <code>mask</code>.</p>
<p>This function may be used after calling get_mempolicy or any other function that takes an array of unsigned long as output parameter (and possibly a maximal node number as input parameter). </p>

</div>
</div>
<a class="anchor" id="ga585ccf818d2f217f4e53f9c6506c3128"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_nodeset_to_linux_libnuma_ulongs </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00073.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long *&#160;</td>
          <td class="paramname"><em>mask</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long *&#160;</td>
          <td class="paramname"><em>maxnode</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert hwloc NUMA node set <code>nodeset</code> into the array of unsigned long <code>mask</code>. </p>
<p><code>mask</code> is the array of unsigned long that will be filled. <code>maxnode</code> contains the maximal node number that may be stored in <code>mask</code>. <code>maxnode</code> will be set to the maximal node number that was found, plus one.</p>
<p>This function may be used before calling set_mempolicy, mbind, migrate_pages or any other function that takes an array of unsigned long and a maximal node number as input parameter. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");