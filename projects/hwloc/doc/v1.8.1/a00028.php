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
<!-- Generated by Doxygen 1.8.6 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li class="current"><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Frequently Asked Questions </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><h1><a class="anchor" id="faq_xml"></a>
I do not want hwloc to rediscover my enormous machine topology every time I rerun a process</h1>
<p>Although the topology discovery is not expensive on common machines, its overhead may become significant when multiple processes repeat the discovery on large machines (for instance when starting one process per core in a parallel application). The machine topology usually does not vary much, except if some cores are stopped/restarted or if the administrator restrictions are modified. Thus rediscovering the whole topology again and again may look useless.</p>
<p>For this purpose, hwloc offers XML import/export features. It lets you save the discovered topology to a file (for instance with the lstopo program) and reload it later by setting the HWLOC_XMLFILE environment variable. The HWLOC_THISSYSTEM environment variable should also be set to 1 to assert that loaded file is really the underlying system.</p>
<p>Loading a XML topology is usually much faster than querying multiple files or calling multiple functions of the operating system. It is also possible to manipulate such XML files with the C programming interface, and the import/export may also be directed to memory buffer (that may for instance be transmitted between applications through a socket). See also <a class="el" href="a00016.php">Importing and exporting topologies from/to XML files</a>.</p>
<h1><a class="anchor" id="faq_diff"></a>
How to avoid memory waste when manipulating multiple similar topologies?</h1>
<p>hwloc does not share information between topologies. If multiple similar topologies are loaded in memory, for instance the topologies of different identical nodes of a cluster, lots of information will be duplicated.</p>
<p><a class="el" href="a00058_source.php" title="Topology differences. ">hwloc/diff.h</a> (see also <a class="el" href="a00096.php">Topology differences</a>) offers the ability to compute topology differences, apply or unapply them, or export/import to/from XML. However this feature is limited to basic differences such as attribute changes. It does not support complex modifications such as adding or removing some objects.</p>
<h1><a class="anchor" id="faq_slow_lstopo"></a>
Why is lstopo slow?</h1>
<p>lstopo enables most hwloc discovery flags by default so that the output topology is as precise as possible (while hwloc disables many of them by default). This includes I/O device discovery through PCI libraries as well as external libraries such as NVML. To speed up lstopo, you may disable such features with command-line options such as <code>&ndash;no-io</code>.</p>
<p>When NVIDIA GPU probing is enabled with CUDA or NVML, one should make sure that the <em>Persistent</em> mode is enabled (with <code>nvidia-smi -pm 1</code>) to avoid significant GPU initialization overhead.</p>
<p>When AMD GPU discovery is enabled with OpenCL and hwloc is used remotely over ssh, some spurious round-trips on the network may significantly increase the discovery time. Forcing the <code>DISPLAY</code> environment variable to the remote X server display (usually <code>:0</code>) instead of only setting the <code>COMPUTE</code> variable may avoid this.</p>
<p>Also remember that these components may be disabled at build-time with configure flags such as <code>&ndash;disable-opencl</code>, <code>&ndash;disable-cuda</code> or <code>&ndash;disable-nvml</code>, and at runtime with the environment variable <code>HWLOC_COMPONENTS=-opencl,cuda,nvml</code>.</p>
<p>If loading topologies is slow because the machine contains tons of processors, one should also consider using XML (see <a class="el" href="a00028.php#faq_xml">I do not want hwloc to rediscover my enormous machine topology every time I rerun a process</a>).</p>
<h1><a class="anchor" id="faq_privileged"></a>
Does hwloc require privileged access?</h1>
<p>hwloc discovers the topology by querying the operating system. Some minor features may require privileged access to the operation system. For instance PCI link speed discovery on Linux is reserved to root, and the entire PCI discovery on FreeBSD requires access to the /dev/pci special file.</p>
<p>To workaround this limitation, it is recommended to export the topology as a XML file generated by the administrator (with the lstopo program) and make it available to all users (see <a class="el" href="a00016.php">Importing and exporting topologies from/to XML files</a>). It will offer all discovery information to any application without requiring any privileged access anymore. Only the necessary hardware characteristics will be exported, no sensitive information will be disclosed through this XML export.</p>
<p>This XML-based model also has the advantage of speeding up the discovery because reading a XML topology is usually much faster than querying the operating system again.</p>
<h1><a class="anchor" id="faq_onedim"></a>
hwloc only has a one-dimensional view of the architecture, it ignores distances</h1>
<p>hwloc places all objects in a tree. Each level is a one-dimensional view of a set of similar objects. All children of the same object (siblings) are assumed to be equally interconnected (same distance between any of them), while the distance between children of different objects (cousins) is supposed to be larger.</p>
<p>Modern machines exhibit complex hardware interconnects, so this tree may miss some information about the actual physical distances between objects. The hwloc topology may therefore be annotated with distance information that may be used to build a more realistic representation (multi-dimensional) of each level. For instance, the root object may contain a distance matrix that represents the latencies between any pairs of NUMA nodes if the BIOS and/or operating system reports them.</p>
<h1><a class="anchor" id="faq_smt"></a>
How may I ignore symmetric multithreading, hyper-threading, ... ?</h1>
<p>hwloc creates one PU (processing unit) object per hardware thread. If your machine supports symmetric multithreading, for instance Hyper-Threading, each Core object may contain multiple PU objects. </p>
<pre class="fragment">$ lstopo -
...
  Core L#1
    PU L#2 (P#1)
    PU L#3 (P#3)
</pre><p>If you need to ignore symmetric multithreading, you should likely manipulate hwloc Core objects directly: </p>
<pre class="fragment">/* get the number of cores */
unsigned nbcores = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_CORE);
...
/* get the third core below the first socket */
hwloc_obj_t socket, core;
socket = hwloc_get_obj_by_type(topology, HWLOC_OBJ_SOCKET, 0);
core = hwloc_get_obj_inside_cpuset_by_type(topology, socket-&gt;cpuset,
                                           HWLOC_OBJ_CORE, 2);
</pre><p>Whenever you want to bind a process or thread to a core, make sure you singlify its cpuset first, so that the task is actually bound to a single thread within this core (to avoid useless migrations). </p>
<pre class="fragment">/* bind on the second core */
hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 1);
hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
hwloc_bitmap_singlify(set);
hwloc_set_cpubind(topology, set, 0);
hwloc_bitmap_free(set);
</pre><p>With hwloc-calc or hwloc-bind command-line tools, you may specify that you only want a single-thread within each core by asking for their first PU object: </p>
<pre class="fragment">$ hwloc-calc core:4-7
0x0000ff00
$ hwloc-calc core:4-7.pu:0
0x00005500
</pre><p>When binding a process on the command-line, you may either specify the exact thread that you want to use, or ask hwloc-bind to singlify the cpuset before binding </p>
<pre class="fragment">$ hwloc-bind core:3.pu:0 -- echo "hello from first thread on core #3"
hello from first thread on core #3
...
$ hwloc-bind core:3 --single -- echo "hello from a single thread on core #3"
hello from a single thread on core #3
</pre><h1><a class="anchor" id="faq_asymmetric"></a>
What happens if my topology is asymmetric?</h1>
<p>hwloc supports asymmetric topologies even if most platforms are usually symmetric. For example, there may be different types of processors in a single machine, each with different numbers of cores, symmetric multithreading, or levels of caches.</p>
<p>To understand how hwloc manages such cases, one should first remember the meaning of levels and cousin objects. All objects of the same type are gathered as horizontal levels with a given depth. They are also connected through the cousin pointers of the <a class="el" href="a00036.php" title="Structure of a topology object. ">hwloc_obj</a> structure. Some types, such as Caches or Groups, are annotated with a depth or level attribute (for instance L2 cache or Group1). Moreover caches have a type attribute (for instance L1i or L1d). Such attributes are also taken in account when gathering objects as horizontal levels. To be clear: there will be one level for L1i caches, another level for L1d caches, another one for L2, etc.</p>
<p>If the topology is asymmetric (e.g., if a cache is missing in one of the processors), a given horizontal level will still exist if there exist any objects of that type. However, some branches of the overall tree may not have an object located in that horizontal level. Note that this specific hole within one horizontal level does not imply anything for other levels. All objects of the same type are gathered in horizontal levels even if their parents or children have different depths and types.</p>
<p>Moreover, it is important to understand that a same parent object may have children of different types (and therefore, different depths). <b>These children are therefore siblings (because they have the same parent), but they are <em>not</em> cousins (because they do not belong to the same horizontal levels).</b></p>
<h1><a class="anchor" id="faq_annotate"></a>
How do I annotate the topology with private notes?</h1>
<p>Each hwloc object contains a <code>userdata</code> field that may be used by applications to store private pointers. This field is only valid during the lifetime of these container object and topology. It becomes invalid as soon the topology is destroyed, or as soon as the object disappears, for instance when restricting the topology. The userdata field is not exported/imported to/from XML by default since hwloc does not know what it contains. This behavior may be changed by specifying application-specific callbacks with <code><a class="el" href="a00084.php#gafd31ee85660ea15497e16cdcf9717f5c" title="Set the application-specific callback for exporting userdata. ">hwloc_topology_set_userdata_export_callback()</a></code> and <code><a class="el" href="a00084.php#ga7a47eecb5807f52c9a6e9bd2e2b6e5c9" title="Set the application-specific callback for importing userdata. ">hwloc_topology_set_userdata_import_callback()</a></code>.</p>
<p>Each object may also contain some <em>info</em> attributes (key name and value) that are setup by hwloc during discovery and that may be extended by the user with <code><a class="el" href="a00079.php#gaba3afe636940872772ed6dfaf0b3552e" title="Add the given info name and value pair to the given object. ">hwloc_obj_add_info()</a></code> (see also <a class="el" href="a00014.php">Object attributes</a>). Contrary to the <code>userdata</code> field which is unique, multiple info attributes may exist for each object, even with the same name. These attributes are always exported to XML. However only character strings may be used as key names and values.</p>
<p>It is also possible to insert Misc objects with custom names anywhere in the topology (<code><a class="el" href="a00082.php#ga017a9ba16d554326c6e3812d545d7230" title="Add a MISC object to the topology. ">hwloc_topology_insert_misc_object_by_cpuset()</a></code>) or as a leaf of the topology (<code><a class="el" href="a00082.php#gadacd7a3d21220fbb30c3256d8b22a294" title="Add a MISC object as a leaf of the topology. ">hwloc_topology_insert_misc_object_by_parent()</a></code>).</p>
<h1><a class="anchor" id="faq_valgrind"></a>
Why does Valgrind complain about hwloc memory leaks?</h1>
<p>If you are debugging your application with Valgrind, you want to avoid memory leak reports that are caused by hwloc and not by your program.</p>
<p>hwloc itself is often checked with Valgrind to make sure it does not leak memory. However some global variables in hwloc dependencies are never freed. For instance libz allocates its global state once at startup and never frees it so that it may be reused later. Some libxml2 global state is also never freed because hwloc does not know whether it can safely ask libxml2 to free it (the application may also be using libxml2 outside of hwloc).</p>
<p>These unfreed variables cause leak reports in Valgrind. hwloc installs a Valgrind <em>suppressions</em> file to hide them. You should pass the following command-line option to Valgrind to use it: </p>
<pre class="fragment">  --suppressions=/path/to/hwloc-valgrind.supp
</pre><h1><a class="anchor" id="faq_upgrade"></a>
How do I handle API upgrades?</h1>
<p>The hwloc interface is extended with every new major release. Any application using the hwloc API should be prepared to check at compile-time whether some features are available in the currently installed hwloc distribution.</p>
<p>To check whether the hwloc version is at least 1.5, you should use: </p>
<pre class="fragment">#include &lt;hwloc.h&gt;
#if HWLOC_API_VERSION &gt;= 0x00010500
...
#endif
</pre><p>One important change in hwloc 1.5 is the removal of the deprecated cpuset API, which was superseded by the new bitmap API since hwloc 1.1. If your code must work with very old hwloc releases, you should use the latest bitmap API anyway. Then, use something similar to the following code to support old cpuset-only hwloc versions: </p>
<pre class="fragment">#include &lt;hwloc.h&gt;
#if HWLOC_API_VERSION &lt; 0x00010100
#define hwloc_bitmap_alloc hwloc_cpuset_alloc
#endif
</pre><p>hwloc 0.9 did not define any <code>HWLOC_API_VERSION</code> but this very old release probably does not deserve support from your application anymore.</p>
<h1><a class="anchor" id="faq_bgq"></a>
How do I build hwloc for BlueGene/Q?</h1>
<p>IBM BlueGene/Q machines run a standard Linux on the I/O node and a custom CNK (<em>Compute Node Kernel</em>) on the compute nodes. To run on the compute node, hwloc must be cross-compiled from the I/O node with the following configuration line: </p>
<pre class="fragment">./configure --host=powerpc64-bgq-linux --disable-shared --enable-static \
  CPPFLAGS='-I/bgsys/drivers/ppcfloor -I/bgsys/drivers/ppcfloor/spi/include/kernel/cnk/'
</pre><p>CPPFLAGS may have to be updated if your platform headers are installed in a different directory.</p>
<h1><a class="anchor" id="faq_netbsd_bind"></a>
How to get useful topology information on NetBSD?</h1>
<p>The NetBSD (and FreeBSD) backend uses x86-specific topology discovery (through the x86 component). This implementation requires CPU binding so as to query topology information from each individual logical processor. This means that hwloc cannot find any useful topology information unless user-level process binding is allowed by the NetBSD kernel. The <code>security.models.extensions.user_set_cpu_affinity</code> sysctl variable must be set to 1 to do so. Otherwise, only the number of logical processors will be detected. </p>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");