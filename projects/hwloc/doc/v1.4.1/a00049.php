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
<!-- Generated by Doxygen 1.7.6.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">CPU binding</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#ga217dc8d373f8958cc93c154ebce1c71c">hwloc_cpubind_flags_t</a> { <a class="el" href="a00049.php#gga217dc8d373f8958cc93c154ebce1c71ca2e0dd0128dac6b03408c7dd170477fdc">HWLOC_CPUBIND_PROCESS</a>, 
<a class="el" href="a00049.php#gga217dc8d373f8958cc93c154ebce1c71caf1b6bbad00d7b1017b918e3719f4d421">HWLOC_CPUBIND_THREAD</a>, 
<a class="el" href="a00049.php#gga217dc8d373f8958cc93c154ebce1c71ca679a7e0f0c7ee06b123565f90d98e7fa">HWLOC_CPUBIND_STRICT</a>, 
<a class="el" href="a00049.php#gga217dc8d373f8958cc93c154ebce1c71ca41ce440443cc3087caed95ab60edcad6">HWLOC_CPUBIND_NOMEMBIND</a>
 }</td></tr>
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#gaf4cc194d5c0d38004a21b9f03522a7e3">hwloc_set_cpubind</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, int flags)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#gab52f83ab16eac465da55e16bdd30df77">hwloc_get_cpubind</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set, int flags)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#gac0ef3510b4e9c1273029ecf94e8c9686">hwloc_set_proc_cpubind</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, int flags)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#gaa1373a002b9a0a87eb002e26c590f2da">hwloc_get_proc_cpubind</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set, int flags)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#gaab65c34a0bc19c5a823f824543cedbd4">hwloc_set_thread_cpubind</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_thread_t thread, <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, int flags)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#ga089cecfdb9a50e5c5cd1b6ff17352d42">hwloc_get_thread_cpubind</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_thread_t thread, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set, int flags)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#ga8e9a4b5ee3eaa18fd3a229790c6b5b17">hwloc_get_last_cpu_location</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set, int flags)</td></tr>
<tr><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00049.php#ga1e005ddb9701e6a993a9eb8abe67a710">hwloc_get_proc_last_cpu_location</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, hwloc_pid_t pid, <a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set, int flags)</td></tr>
</table>
<hr/><a name="details" id="details"></a><h2>Detailed Description</h2>
<p>It is often useful to call <a class="el" href="a00065.php#ga4630aa1b7e08eac5b41be126194e84a1" title="Keep a single index among those set in bitmap bitmap.">hwloc_bitmap_singlify()</a> first so that a single CPU remains in the set. This way, the process will not even migrate between different CPUs. Some operating systems also only support that kind of binding.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Some operating systems do not provide all hwloc-supported mechanisms to bind processes, threads, etc. and the corresponding binding functions may fail. -1 is returned and errno is set to ENOSYS when it is not possible to bind the requested kind of object processes/threads. errno is set to EXDEV when the requested cpuset can not be enforced (e.g. some systems only allow one CPU, and some other systems only allow one NUMA node).</dd></dl>
<p>The most portable version that should be preferred over the others, whenever possible, is</p>
<div class="fragment"><pre class="fragment"> <a class="code" href="a00049.php#gaf4cc194d5c0d38004a21b9f03522a7e3" title="Bind current process or thread on cpus given in physical bitmap set.">hwloc_set_cpubind</a>(topology, <span class="keyword">set</span>, 0),
</pre></div><p>as it just binds the current program, assuming it is single-threaded, or</p>
<div class="fragment"><pre class="fragment"> <a class="code" href="a00049.php#gaf4cc194d5c0d38004a21b9f03522a7e3" title="Bind current process or thread on cpus given in physical bitmap set.">hwloc_set_cpubind</a>(topology, <span class="keyword">set</span>, <a class="code" href="a00049.php#gga217dc8d373f8958cc93c154ebce1c71caf1b6bbad00d7b1017b918e3719f4d421" title="Bind current thread of current process.">HWLOC_CPUBIND_THREAD</a>),
</pre></div><p>which binds the current thread of the current program (which may be multithreaded).</p>
<dl class="note"><dt><b>Note:</b></dt><dd>To unbind, just call the binding function with either a full cpuset or a cpuset equal to the system cpuset.</dd>
<dd>
On some operating systems, CPU binding may have effects on memory binding, see <a class="el" href="a00049.php#gga217dc8d373f8958cc93c154ebce1c71ca41ce440443cc3087caed95ab60edcad6" title="Avoid any effect on memory binding.">HWLOC_CPUBIND_NOMEMBIND</a></dd></dl>
<p>Running lstopo --top can be a very convenient tool to check how binding actually happened. </p>
<hr/><h2>Enumeration Type Documentation</h2>
<a class="anchor" id="ga217dc8d373f8958cc93c154ebce1c71c"></a><!-- doxytag: member="hwloc.h::hwloc_cpubind_flags_t" ref="ga217dc8d373f8958cc93c154ebce1c71c" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00049.php#ga217dc8d373f8958cc93c154ebce1c71c">hwloc_cpubind_flags_t</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Process/Thread binding flags. </p>
<p>These bit flags can be used to refine the binding policy.</p>
<p>The default (0) is to bind the current process, assumed to be single-threaded, in a non-strict way. This is the most portable way to bind as all operating systems usually provide it.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Not all systems support all kinds of binding. See the "Detailed Description" section of <a class="el" href="a00049.php">CPU binding</a> for a description of errors that can occur. </dd></dl>
<dl><dt><b>Enumerator: </b></dt><dd><table border="0" cellspacing="2" cellpadding="0">
<tr><td valign="top"><em><a class="anchor" id="gga217dc8d373f8958cc93c154ebce1c71ca2e0dd0128dac6b03408c7dd170477fdc"></a><!-- doxytag: member="HWLOC_CPUBIND_PROCESS" ref="gga217dc8d373f8958cc93c154ebce1c71ca2e0dd0128dac6b03408c7dd170477fdc" args="" -->HWLOC_CPUBIND_PROCESS</em>&nbsp;</td><td>
<p>Bind all threads of the current (possibly) multithreaded process. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="gga217dc8d373f8958cc93c154ebce1c71caf1b6bbad00d7b1017b918e3719f4d421"></a><!-- doxytag: member="HWLOC_CPUBIND_THREAD" ref="gga217dc8d373f8958cc93c154ebce1c71caf1b6bbad00d7b1017b918e3719f4d421" args="" -->HWLOC_CPUBIND_THREAD</em>&nbsp;</td><td>
<p>Bind current thread of current process. </p>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="gga217dc8d373f8958cc93c154ebce1c71ca679a7e0f0c7ee06b123565f90d98e7fa"></a><!-- doxytag: member="HWLOC_CPUBIND_STRICT" ref="gga217dc8d373f8958cc93c154ebce1c71ca679a7e0f0c7ee06b123565f90d98e7fa" args="" -->HWLOC_CPUBIND_STRICT</em>&nbsp;</td><td>
<p>Request for strict binding from the OS. </p>
<p>By default, when the designated CPUs are all busy while other CPUs are idle, operating systems may execute the thread/process on those other CPUs instead of the designated CPUs, to let them progress anyway. Strict binding means that the thread/process will _never_ execute on other cpus than the designated CPUs, even when those are busy with other tasks and other CPUs are idle.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>Depending on the operating system, strict binding may not be possible (e.g., the OS does not implement it) or not allowed (e.g., for an administrative reasons), and the function will fail in that case.</dd></dl>
<p>When retrieving the binding of a process, this flag checks whether all its threads actually have the same binding. If the flag is not given, the binding of each thread will be accumulated.</p>
<dl class="note"><dt><b>Note:</b></dt><dd>This flag is meaningless when retrieving the binding of a thread. </dd></dl>
</td></tr>
<tr><td valign="top"><em><a class="anchor" id="gga217dc8d373f8958cc93c154ebce1c71ca41ce440443cc3087caed95ab60edcad6"></a><!-- doxytag: member="HWLOC_CPUBIND_NOMEMBIND" ref="gga217dc8d373f8958cc93c154ebce1c71ca41ce440443cc3087caed95ab60edcad6" args="" -->HWLOC_CPUBIND_NOMEMBIND</em>&nbsp;</td><td>
<p>Avoid any effect on memory binding. </p>
<p>On some operating systems, some CPU binding function would also bind the memory on the corresponding NUMA node. It is often not a problem for the application, but if it is, setting this flag will make hwloc avoid using OS functions that would also bind memory. This will however reduce the support of CPU bindings, i.e. potentially return -1 with errno set to ENOSYS in some cases.</p>
<p>This flag is only meaningful when used with functions that set the CPU binding. It is ignored when used with functions that get CPU binding information. </p>
</td></tr>
</table>
</dd>
</dl>

</div>
</div>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="gab52f83ab16eac465da55e16bdd30df77"></a><!-- doxytag: member="hwloc.h::hwloc_get_cpubind" ref="gab52f83ab16eac465da55e16bdd30df77" args="(hwloc_topology_t topology, hwloc_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#gab52f83ab16eac465da55e16bdd30df77">hwloc_get_cpubind</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get current process or thread binding. </p>
<p>Writes into <code>set</code> the physical cpuset which the process or thread (according to <em>flags</em>) was last bound to. </p>

</div>
</div>
<a class="anchor" id="ga8e9a4b5ee3eaa18fd3a229790c6b5b17"></a><!-- doxytag: member="hwloc.h::hwloc_get_last_cpu_location" ref="ga8e9a4b5ee3eaa18fd3a229790c6b5b17" args="(hwloc_topology_t topology, hwloc_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#ga8e9a4b5ee3eaa18fd3a229790c6b5b17">hwloc_get_last_cpu_location</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the last physical CPU where the current process or thread ran. </p>
<p>The operating system may move some tasks from one processor to another at any time according to their binding, so this function may return something that is already outdated. </p>

</div>
</div>
<a class="anchor" id="gaa1373a002b9a0a87eb002e26c590f2da"></a><!-- doxytag: member="hwloc.h::hwloc_get_proc_cpubind" ref="gaa1373a002b9a0a87eb002e26c590f2da" args="(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#gaa1373a002b9a0a87eb002e26c590f2da">hwloc_get_proc_cpubind</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_pid_t&#160;</td>
          <td class="paramname"><em>pid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the current physical binding of process <code>pid</code>. </p>
<dl class="note"><dt><b>Note:</b></dt><dd><code>hwloc_pid_t</code> is <code>pid_t</code> on Unix platforms, and <code>HANDLE</code> on native Windows platforms.</dd>
<dd>
HWLOC_CPUBIND_THREAD can not be used in <code>flags</code>.</dd>
<dd>
As a special case on Linux, if a tid (thread ID) is supplied instead of a pid (process ID), the binding for that specific thread is returned. </dd></dl>

</div>
</div>
<a class="anchor" id="ga1e005ddb9701e6a993a9eb8abe67a710"></a><!-- doxytag: member="hwloc.h::hwloc_get_proc_last_cpu_location" ref="ga1e005ddb9701e6a993a9eb8abe67a710" args="(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#ga1e005ddb9701e6a993a9eb8abe67a710">hwloc_get_proc_last_cpu_location</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_pid_t&#160;</td>
          <td class="paramname"><em>pid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the last physical CPU where a process ran. </p>
<p>The operating system may move some tasks from one processor to another at any time according to their binding, so this function may return something that is already outdated.</p>
<dl class="note"><dt><b>Note:</b></dt><dd><code>hwloc_pid_t</code> is <code>pid_t</code> on Unix platforms, and <code>HANDLE</code> on native Windows platforms.</dd>
<dd>
HWLOC_CPUBIND_THREAD can not be used in <code>flags</code>.</dd>
<dd>
As a special case on Linux, if a tid (thread ID) is supplied instead of a pid (process ID), the binding for that specific thread is returned. </dd></dl>

</div>
</div>
<a class="anchor" id="ga089cecfdb9a50e5c5cd1b6ff17352d42"></a><!-- doxytag: member="hwloc.h::hwloc_get_thread_cpubind" ref="ga089cecfdb9a50e5c5cd1b6ff17352d42" args="(hwloc_topology_t topology, hwloc_thread_t thread, hwloc_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#ga089cecfdb9a50e5c5cd1b6ff17352d42">hwloc_get_thread_cpubind</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_thread_t&#160;</td>
          <td class="paramname"><em>thread</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the current physical binding of thread <code>tid</code>. </p>
<dl class="note"><dt><b>Note:</b></dt><dd><code>hwloc_thread_t</code> is <code>pthread_t</code> on Unix platforms, and <code>HANDLE</code> on native Windows platforms.</dd>
<dd>
HWLOC_CPUBIND_PROCESS can not be used in <code>flags</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="gaf4cc194d5c0d38004a21b9f03522a7e3"></a><!-- doxytag: member="hwloc.h::hwloc_set_cpubind" ref="gaf4cc194d5c0d38004a21b9f03522a7e3" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#gaf4cc194d5c0d38004a21b9f03522a7e3">hwloc_set_cpubind</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Bind current process or thread on cpus given in physical bitmap <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd>-1 with errno set to ENOSYS if the action is not supported </dd>
<dd>
-1 with errno set to EXDEV if the binding cannot be enforced </dd></dl>

</div>
</div>
<a class="anchor" id="gac0ef3510b4e9c1273029ecf94e8c9686"></a><!-- doxytag: member="hwloc.h::hwloc_set_proc_cpubind" ref="gac0ef3510b4e9c1273029ecf94e8c9686" args="(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_const_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#gac0ef3510b4e9c1273029ecf94e8c9686">hwloc_set_proc_cpubind</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_pid_t&#160;</td>
          <td class="paramname"><em>pid</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Bind a process <code>pid</code> on cpus given in physical bitmap <code>set</code>. </p>
<dl class="note"><dt><b>Note:</b></dt><dd><code>hwloc_pid_t</code> is <code>pid_t</code> on Unix platforms, and <code>HANDLE</code> on native Windows platforms.</dd>
<dd>
HWLOC_CPUBIND_THREAD can not be used in <code>flags</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="gaab65c34a0bc19c5a823f824543cedbd4"></a><!-- doxytag: member="hwloc.h::hwloc_set_thread_cpubind" ref="gaab65c34a0bc19c5a823f824543cedbd4" args="(hwloc_topology_t topology, hwloc_thread_t thread, hwloc_const_cpuset_t set, int flags)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int <a class="el" href="a00049.php#gaab65c34a0bc19c5a823f824543cedbd4">hwloc_set_thread_cpubind</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">hwloc_thread_t&#160;</td>
          <td class="paramname"><em>thread</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Bind a thread <code>thread</code> on cpus given in physical bitmap <code>set</code>. </p>
<dl class="note"><dt><b>Note:</b></dt><dd><code>hwloc_thread_t</code> is <code>pthread_t</code> on Unix platforms, and <code>HANDLE</code> on native Windows platforms.</dd>
<dd>
HWLOC_CPUBIND_PROCESS can not be used in <code>flags</code>. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");