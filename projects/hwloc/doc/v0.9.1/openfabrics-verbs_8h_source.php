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
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs">
    <ul>
      <li><a href="files.php"><span>File&nbsp;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
<h1>openfabrics-verbs.h</h1><a href="openfabrics-verbs_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2009 CNRS, INRIA, Université Bordeaux 1</span>
<a name="l00003"></a>00003 <span class="comment"> * Copyright © 2009 Cisco Systems, Inc.  All rights reserved.</span>
<a name="l00004"></a>00004 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00005"></a>00005 <span class="comment"> */</span>
<a name="l00006"></a>00006 
<a name="l00017"></a>00017 <span class="preprocessor">#ifndef HWLOC_OPENFABRICS_VERBS_H</span>
<a name="l00018"></a>00018 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_OPENFABRICS_VERBS_H</span>
<a name="l00019"></a>00019 <span class="preprocessor"></span>
<a name="l00020"></a>00020 <span class="preprocessor">#include &lt;<a class="code" href="hwloc_8h.php" title="The hwloc API.">hwloc.h</a>&gt;</span>
<a name="l00021"></a>00021 <span class="preprocessor">#include &lt;hwloc/config.h&gt;</span>
<a name="l00022"></a>00022 <span class="preprocessor">#include &lt;<a class="code" href="linux_8h.php" title="Macros to help interaction between hwloc and Linux.">hwloc/linux.h</a>&gt;</span>
<a name="l00023"></a>00023 
<a name="l00024"></a>00024 <span class="preprocessor">#include &lt;infiniband/verbs.h&gt;</span>
<a name="l00025"></a>00025 
<a name="l00038"></a>00038 <span class="keyword">static</span> inline <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a>
<a name="l00039"></a><a class="code" href="group__hwloc__openfabrics.php#ga8fcd1418f29faf453ed502fb11172465">00039</a> <a class="code" href="group__hwloc__openfabrics.php#ga8fcd1418f29faf453ed502fb11172465" title="Get the CPU set of logical processors that are physically close to device ibdev.">hwloc_ibv_get_device_cpuset</a>(<span class="keyword">struct</span> ibv_device *ibdev)
<a name="l00040"></a>00040 {
<a name="l00041"></a>00041 <span class="preprocessor">#if defined(HWLOC_LINUX_SYS)</span>
<a name="l00042"></a>00042 <span class="preprocessor"></span>  <span class="comment">/* If we&apos;re on Linux, use the verbs-provided sysfs mechanism to</span>
<a name="l00043"></a>00043 <span class="comment">     get the local cpus */</span>
<a name="l00044"></a>00044 <span class="preprocessor">#define HWLOC_OPENFABRICS_VERBS_SYSFS_PATH_MAX 128</span>
<a name="l00045"></a>00045 <span class="preprocessor"></span>  <span class="keywordtype">char</span> path[HWLOC_OPENFABRICS_VERBS_SYSFS_PATH_MAX];
<a name="l00046"></a>00046   FILE *sysfile = NULL;
<a name="l00047"></a>00047   <a class="code" href="group__hwlocality__cpuset.php#ga7366332f7090f5b54d4b25a0c2c4b411" title="Set of CPUs represented as an opaque pointer to an internal bitmask.">hwloc_cpuset_t</a> <span class="keyword">set</span>;
<a name="l00048"></a>00048 
<a name="l00049"></a>00049   sprintf(path, <span class="stringliteral">&quot;/sys/class/infiniband/%s/device/local_cpus&quot;</span>,
<a name="l00050"></a>00050           ibv_get_device_name(ibdev));
<a name="l00051"></a>00051   sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);
<a name="l00052"></a>00052   <span class="keywordflow">if</span> (!sysfile)
<a name="l00053"></a>00053     <span class="keywordflow">return</span> NULL;
<a name="l00054"></a>00054 
<a name="l00055"></a>00055   <span class="keyword">set</span> = <a class="code" href="group__hwlocality__linux__cpumap.php#gaaa0078dd3d869600622243b4e52936b2" title="Convert a linux kernel cpumap file file into hwloc CPU set.">hwloc_linux_parse_cpumap_file</a>(sysfile);
<a name="l00056"></a>00056 
<a name="l00057"></a>00057   fclose(sysfile);
<a name="l00058"></a>00058   <span class="keywordflow">return</span> <span class="keyword">set</span>;
<a name="l00059"></a>00059 <span class="preprocessor">#else</span>
<a name="l00060"></a>00060 <span class="preprocessor"></span>  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span>
<a name="l00061"></a>00061   <span class="keywordflow">return</span> <a class="code" href="group__hwlocality__cpuset.php#ga19d8c163e4834ba69c808560aa5a89b3" title="Duplicate CPU set set by allocating a new CPU set and copying its contents.">hwloc_cpuset_dup</a>(<a class="code" href="group__hwlocality__helper__traversal__basic.php#gab39658e42f1046db0f8870a0d0ba9f42" title="Returns the top-object of the topology-tree. Its type is HWLOC_OBJ_SYSTEM.">hwloc_get_system_obj</a>(topology)-&gt;cpuset);
<a name="l00062"></a>00062 <span class="preprocessor">#endif</span>
<a name="l00063"></a>00063 <span class="preprocessor"></span>}
<a name="l00064"></a>00064 
<a name="l00067"></a>00067 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_OPENFABRICS_VERBS_H */</span>
</pre></div></div>
<?php
include_once("$topdir/includes/footer.inc");