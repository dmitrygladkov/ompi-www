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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Environment Variables </h1>  </div>
</div>
<div class="contents">
<div class="textblock"><p>The behavior of the hwloc library and tools may be tuned thanks to the following environment variables.</p>
<dl>
<dt>HWLOC_XMLFILE=/path/to/file.xml </dt>
<dd><p class="startdd">enforces the discovery from the given XML file as if <a class="el" href="group__hwlocality__configuration.php#ga93efcc8a962afe1ed23393700682173f" title="Enable XML-file based topology.">hwloc_topology_set_xml()</a> had been called. This file may have been generated earlier with lstopo file.xml. For convenience, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, HWLOC_THISSYSTEM should be set 1 in the environment too, to assert that the loaded file is really the underlying system. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_FSROOT=/path/to/linux/filesystem-root/ </dt>
<dd><p class="startdd">switches to reading the topology from the specified Linux filesystem root instead of the main file-system root, as if <a class="el" href="group__hwlocality__configuration.php#ga2f6bfb6958d8b508ea1d7d5bb266432c" title="Change the file-system root path when building the topology from sysfs/procfs.">hwloc_topology_set_fsroot()</a> had been called. Not using the main file-system root causes <a class="el" href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a> to return 0. For convenience, this backend provides empty binding hooks which just return success. To have hwloc still actually call OS-specific hooks, HWLOC_THISSYSTEM should be set 1 in the environment too, to assert that the loaded file is really the underlying system. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_THISSYSTEM=1 </dt>
<dd><p class="startdd">enforces the return value of <a class="el" href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem()</a>. It means that it makes hwloc assume that the selected backend provides the topology for the system on which we are running, even if it is not the OS-specific backend but the XML backend for instance. This means making the binding functions actually call the OS-specific system calls and really do binding, while the XML backend would otherwise provide empty hooks just returning success. This can be used for efficiency reasons to first detect the topology once, save it to an XML file, and quickly reload it later through the XML backend, but still having binding functions actually do bind. </p>
<p class="enddd"></p>
</dd>
<dt>HWLOC_IGNORE_DISTANCES=0 </dt>
<dd><p class="startdd">disables objects grouping based on distances. By default, hwloc uses distance matrices between objects (read from the OS) to find groups of close objects. These groups are described by adding intermediate Group objects in the topology. Setting this environment variable to 1 will disable this grouping. </p>
<p class="enddd"></p>
</dd>
</dl>
</div></div>
<?php
include_once("$topdir/includes/footer.inc");