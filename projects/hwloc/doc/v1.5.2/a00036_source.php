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
<!-- Generated by Doxygen 1.8.3.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_d44c64559bbebec7f509842c48db8b23.php">include</a></li><li class="navelem"><a class="el" href="dir_5cb306d949c7931a3b6c77517393dd34.php">hwloc</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">myriexpress.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2010-2012 inria.  All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;</div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#ifndef HWLOC_MYRIEXPRESS_H</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define HWLOC_MYRIEXPRESS_H</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;</div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#include &lt;myriexpress.h&gt;</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;</div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">static</span> inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00043"></a><span class="lineno"><a class="code" href="a00073.php#ga87f4746d0cad579ce4e86b98088f22a1">   43</a></span>&#160;<a class="code" href="a00073.php#ga87f4746d0cad579ce4e86b98088f22a1" title="Get the CPU set of logical processors that are physically close the MX board id.">hwloc_mx_board_get_device_cpuset</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;                                 <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>, <a class="code" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> <span class="keyword">set</span>)</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;  uint32_t in, out;</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;  <span class="keywordflow">if</span> (!<a class="code" href="a00046.php#ga0d109e33fc7990f62f665d336e5e5111" title="Does the topology context come from this system?">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;  }</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;  in = id;</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;  <span class="keywordflow">if</span> (mx_get_info(NULL, MX_NUMA_NODE, &amp;in, <span class="keyword">sizeof</span>(in), &amp;out, <span class="keyword">sizeof</span>(out)) != MX_SUCCESS) {</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;  }</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;  <span class="keywordflow">if</span> (out != (uint32_t) -1) {</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    <a class="code" href="a00016.php" title="Structure of a topology object.">hwloc_obj_t</a> obj = NULL;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <span class="keywordflow">while</span> ((obj = <a class="code" href="a00053.php#ga5f08ceb69375341e73563cfe2e77534e" title="Returns the next object of type type.">hwloc_get_next_obj_by_type</a>(topology, <a class="code" href="a00041.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>, obj)) != NULL)</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;      <span class="keywordflow">if</span> (obj-&gt;<a class="code" href="a00016.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a> == out) {</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;        <a class="code" href="a00065.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, obj-&gt;<a class="code" href="a00016.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;        <span class="keywordflow">goto</span> out;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;      }</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;  }</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;  <span class="comment">/* fallback to the full topology cpuset */</span></div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;  <a class="code" href="a00065.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, <a class="code" href="a00060.php#ga418ebb39eaf1eac8f9cf4047cf59a534" title="Get complete CPU set.">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160; out:</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;}</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;<span class="keyword">static</span> inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00083"></a><span class="lineno"><a class="code" href="a00073.php#ga2ff7763b9c2c5975f9a2e3d638351535">   83</a></span>&#160;<a class="code" href="a00073.php#ga2ff7763b9c2c5975f9a2e3d638351535" title="Get the CPU set of logical processors that are physically close to endpoint endpoint.">hwloc_mx_endpoint_get_device_cpuset</a>(<a class="code" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;                                    mx_endpoint_t endpoint, <a class="code" href="a00040.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> <span class="keyword">set</span>)</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;{</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;  uint64_t nid;</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;  uint32_t nindex, eid;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;  mx_endpoint_addr_t eaddr;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;  <span class="keywordflow">if</span> (mx_get_endpoint_addr(endpoint, &amp;eaddr) != MX_SUCCESS) {</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;  }</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;  <span class="keywordflow">if</span> (mx_decompose_endpoint_addr(eaddr, &amp;nid, &amp;eid) != MX_SUCCESS) {</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;  }</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;  <span class="keywordflow">if</span> (mx_nic_id_to_board_number(nid, &amp;nindex) != MX_SUCCESS) {</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;  }</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;  <span class="keywordflow">return</span> <a class="code" href="a00073.php#ga87f4746d0cad579ce4e86b98088f22a1" title="Get the CPU set of logical processors that are physically close the MX board id.">hwloc_mx_board_get_device_cpuset</a>(topology, nindex, <span class="keyword">set</span>);</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;}</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;<span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_MYRIEXPRESS_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");