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
<!-- Generated by Doxygen 1.6.1 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul>
      <li><a href="index.php"><span>Main&nbsp;Page</span></a></li>
      <li><a href="pages.php"><span>Related&nbsp;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&nbsp;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<h1>Finding a set of similar Objects covering at least a CPU set</h1><table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><h2>Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__coverings.php#ga39cbd3f1608d0fe503d396430cffe219">hwloc_get_next_obj_covering_cpuset_by_depth</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, unsigned depth, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> prev)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Iterate through same-depth objects covering at least CPU set <code>set</code>.  <a href="#ga39cbd3f1608d0fe503d396430cffe219"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td><td class="memItemRight" valign="bottom"><a class="el" href="group__hwlocality__helper__find__coverings.php#gaad89905a7c9388283535296802d766cb">hwloc_get_next_obj_covering_cpuset_by_type</a> (<a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a> set, <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> prev)</td></tr>
<tr><td class="mdescLeft">&nbsp;</td><td class="mdescRight">Iterate through same-type objects covering at least CPU set <code>set</code>.  <a href="#gaad89905a7c9388283535296802d766cb"></a><br/></td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga39cbd3f1608d0fe503d396430cffe219"></a><!-- doxytag: member="helper.h::hwloc_get_next_obj_covering_cpuset_by_depth" ref="ga39cbd3f1608d0fe503d396430cffe219" args="(hwloc_topology_t topology, hwloc_cpuset_t set, unsigned depth, hwloc_obj_t prev)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_get_next_obj_covering_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&nbsp;</td>
          <td class="paramname"> <em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>prev</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Iterate through same-depth objects covering at least CPU set <code>set</code>. </p>
<p>If object <code>prev</code> is <code>NULL</code>, return the first object at depth <code>depth</code> covering at least part of CPU set <code>set</code>. The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object covering at least another part of <code>set</code>. </p>

</div>
</div>
<a class="anchor" id="gaad89905a7c9388283535296802d766cb"></a><!-- doxytag: member="helper.h::hwloc_get_next_obj_covering_cpuset_by_type" ref="gaad89905a7c9388283535296802d766cb" args="(hwloc_topology_t topology, hwloc_cpuset_t set, hwloc_obj_type_t type, hwloc_obj_t prev)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="structhwloc__obj.php">hwloc_obj_t</a> hwloc_get_next_obj_covering_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&nbsp;</td>
          <td class="paramname"> <em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411">hwloc_cpuset_t</a>&nbsp;</td>
          <td class="paramname"> <em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&nbsp;</td>
          <td class="paramname"> <em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structhwloc__obj.php">hwloc_obj_t</a>&nbsp;</td>
          <td class="paramname"> <em>prev</em></td><td>&nbsp;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Iterate through same-type objects covering at least CPU set <code>set</code>. </p>
<p>If object <code>prev</code> is <code>NULL</code>, return the first object of type <code>type</code> covering at least part of CPU set <code>set</code>. The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object of type <code>type</code> covering at least another part of <code>set</code>.</p>
<p>If there are no or multiple depths for type <code>type</code>, <code>NULL</code> is returned. The caller may fallback to <a class="el" href="group__hwlocality__helper__find__coverings.php#ga39cbd3f1608d0fe503d396430cffe219" title="Iterate through same-depth objects covering at least CPU set set.">hwloc_get_next_obj_covering_cpuset_by_depth()</a> for each depth. </p>

</div>
</div>
</div>
<?php
include_once("$topdir/includes/footer.inc");