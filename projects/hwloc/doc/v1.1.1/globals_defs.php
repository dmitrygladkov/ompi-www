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
<!-- Generated by Doxygen 1.7.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li class="current"><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="globals.php"><span>All</span></a></li>
      <li><a href="globals_func.php"><span>Functions</span></a></li>
      <li><a href="globals_type.php"><span>Typedefs</span></a></li>
      <li><a href="globals_enum.php"><span>Enumerations</span></a></li>
      <li><a href="globals_eval.php"><span>Enumerator</span></a></li>
      <li class="current"><a href="globals_defs.php"><span>Defines</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
&#160;<ul>
<li>HWLOC_API_VERSION
: <a class="el" href="group__hwlocality__api__version.php#ga8f4dfb8eef138af55dd1a0fa802e5476">hwloc.h</a>
</li>
<li>hwloc_bitmap_foreach_begin
: <a class="el" href="group__hwlocality__bitmap.php#ga3f6861045a8029ade373510ffa727d2a">bitmap.h</a>
</li>
<li>hwloc_bitmap_foreach_end
: <a class="el" href="group__hwlocality__bitmap.php#gafcf3246db406218d4e155735b3fa6528">bitmap.h</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");