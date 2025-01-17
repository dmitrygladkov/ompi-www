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
<!-- Generated by Doxygen 1.7.4 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li class="current"><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
  <div id="navrow3" class="tabs2">
    <ul class="tablist">
      <li class="current"><a href="globals.php"><span>All</span></a></li>
      <li><a href="globals_func.php"><span>Functions</span></a></li>
      <li><a href="globals_type.php"><span>Typedefs</span></a></li>
      <li><a href="globals_enum.php"><span>Enumerations</span></a></li>
      <li><a href="globals_eval.php"><span>Enumerator</span></a></li>
      <li><a href="globals_defs.php"><span>Defines</span></a></li>
    </ul>
  </div>
  <div id="navrow4" class="tabs3">
    <ul class="tablist">
      <li class="current"><a href="globals.php#index_h"><span>h</span></a></li>
    </ul>
  </div>
</div>
<div class="contents">
<div class="textblock">Here is a list of all functions, variables, defines, enums, and typedefs with links to the files they belong to:</div>

<h3><a class="anchor" id="index_h"></a>- h -</h3><ul>
<li>hwloc_alloc()
: <a class="el" href="group__hwlocality__membinding.php#gac5586e58cf25c3596b7d4aa31ce13259">hwloc.h</a>
</li>
<li>hwloc_alloc_membind()
: <a class="el" href="group__hwlocality__membinding.php#ga221a7edc5d436300374fa16463f607e5">hwloc.h</a>
</li>
<li>hwloc_alloc_membind_nodeset()
: <a class="el" href="group__hwlocality__membinding.php#gaeaa00714a9c4319bda0a74ca6f8720e8">hwloc.h</a>
</li>
<li>hwloc_alloc_membind_policy()
: <a class="el" href="group__hwlocality__helper__binding.php#ga6178c6a9ec1dd88ec9f6a9fcdcc7d634">helper.h</a>
</li>
<li>hwloc_alloc_membind_policy_nodeset()
: <a class="el" href="group__hwlocality__helper__binding.php#ga3e772fbc4de626ed80f13d332b7d4d03">helper.h</a>
</li>
<li>HWLOC_API_VERSION
: <a class="el" href="group__hwlocality__api__version.php#ga8f4dfb8eef138af55dd1a0fa802e5476">hwloc.h</a>
</li>
<li>hwloc_bitmap_allbut()
: <a class="el" href="group__hwlocality__bitmap.php#ga88204c1c313aa067da10241b5886a166">bitmap.h</a>
</li>
<li>hwloc_bitmap_alloc()
: <a class="el" href="group__hwlocality__bitmap.php#ga9fb6aedc30d4ef4998fa53e2403b6130">bitmap.h</a>
</li>
<li>hwloc_bitmap_alloc_full()
: <a class="el" href="group__hwlocality__bitmap.php#gadd4479485685bda179f4b8b9b70f671e">bitmap.h</a>
</li>
<li>hwloc_bitmap_and()
: <a class="el" href="group__hwlocality__bitmap.php#gac2f7675dcf1b664a832413d9990d1bcf">bitmap.h</a>
</li>
<li>hwloc_bitmap_andnot()
: <a class="el" href="group__hwlocality__bitmap.php#ga7618a962685d95564564ba07e9b2199b">bitmap.h</a>
</li>
<li>hwloc_bitmap_asprintf()
: <a class="el" href="group__hwlocality__bitmap.php#gad3cf87ceb58aa91656756bbb58057320">bitmap.h</a>
</li>
<li>hwloc_bitmap_clr()
: <a class="el" href="group__hwlocality__bitmap.php#ga54e89b87ba5f5c18323f16690e0e5730">bitmap.h</a>
</li>
<li>hwloc_bitmap_clr_range()
: <a class="el" href="group__hwlocality__bitmap.php#gac27bd46fd5b387def6b40712b7ee2796">bitmap.h</a>
</li>
<li>hwloc_bitmap_compare()
: <a class="el" href="group__hwlocality__bitmap.php#gadd3aa325f2d6a17b5aa3b3be9c740da0">bitmap.h</a>
</li>
<li>hwloc_bitmap_compare_first()
: <a class="el" href="group__hwlocality__bitmap.php#gac1cbd1e03f9986552243761e657e1752">bitmap.h</a>
</li>
<li>hwloc_bitmap_copy()
: <a class="el" href="group__hwlocality__bitmap.php#gab14743355fa03b36cef521cbcd2fbf64">bitmap.h</a>
</li>
<li>hwloc_bitmap_dup()
: <a class="el" href="group__hwlocality__bitmap.php#gaaa4ed76211cd3694dfbea2109fc440be">bitmap.h</a>
</li>
<li>hwloc_bitmap_fill()
: <a class="el" href="group__hwlocality__bitmap.php#ga52456f7ef79d68e610cb65e3f7ffafad">bitmap.h</a>
</li>
<li>hwloc_bitmap_first()
: <a class="el" href="group__hwlocality__bitmap.php#ga42472a7b75ca79cae19f0611fdb849e6">bitmap.h</a>
</li>
<li>hwloc_bitmap_foreach_begin
: <a class="el" href="group__hwlocality__bitmap.php#ga3f6861045a8029ade373510ffa727d2a">bitmap.h</a>
</li>
<li>hwloc_bitmap_foreach_end
: <a class="el" href="group__hwlocality__bitmap.php#gafcf3246db406218d4e155735b3fa6528">bitmap.h</a>
</li>
<li>hwloc_bitmap_free()
: <a class="el" href="group__hwlocality__bitmap.php#ga8e7035fe555ef96921bfb98e08519bc7">bitmap.h</a>
</li>
<li>hwloc_bitmap_from_ith_ulong()
: <a class="el" href="group__hwlocality__bitmap.php#ga3c44c943cb3a3e4577b32d924e4f36f2">bitmap.h</a>
</li>
<li>hwloc_bitmap_from_ulong()
: <a class="el" href="group__hwlocality__bitmap.php#ga02eae57cff32b6aa55044e6609ae7d73">bitmap.h</a>
</li>
<li>hwloc_bitmap_intersects()
: <a class="el" href="group__hwlocality__bitmap.php#ga575c27953709a8cb9a047aae65157526">bitmap.h</a>
</li>
<li>hwloc_bitmap_isequal()
: <a class="el" href="group__hwlocality__bitmap.php#ga4dd6a75ab63d33ef33bd626b0e489388">bitmap.h</a>
</li>
<li>hwloc_bitmap_isfull()
: <a class="el" href="group__hwlocality__bitmap.php#ga59a07ecd8e74f2d4ee4271a1dbf0e4dd">bitmap.h</a>
</li>
<li>hwloc_bitmap_isincluded()
: <a class="el" href="group__hwlocality__bitmap.php#gaae29e14a926c198e8f91e6e4790621e7">bitmap.h</a>
</li>
<li>hwloc_bitmap_isset()
: <a class="el" href="group__hwlocality__bitmap.php#ga2583f44cbdb5fff2ea40efdcf3975d3f">bitmap.h</a>
</li>
<li>hwloc_bitmap_iszero()
: <a class="el" href="group__hwlocality__bitmap.php#gaa94fed35d2a598bc4a8657b6955b7bf5">bitmap.h</a>
</li>
<li>hwloc_bitmap_last()
: <a class="el" href="group__hwlocality__bitmap.php#ga4d5786ea9561d9ddbf90bc0ce606c549">bitmap.h</a>
</li>
<li>hwloc_bitmap_list_asprintf()
: <a class="el" href="group__hwlocality__bitmap.php#ga600651f00d39d378f423acbd75d938d2">bitmap.h</a>
</li>
<li>hwloc_bitmap_list_snprintf()
: <a class="el" href="group__hwlocality__bitmap.php#gab94b52560ea4333663895b3276e89af2">bitmap.h</a>
</li>
<li>hwloc_bitmap_list_sscanf()
: <a class="el" href="group__hwlocality__bitmap.php#gafe8fc90e7a9171e287cf1bfa11e85980">bitmap.h</a>
</li>
<li>hwloc_bitmap_next()
: <a class="el" href="group__hwlocality__bitmap.php#ga00fc0b9d7d603e271b75956a7dd28826">bitmap.h</a>
</li>
<li>hwloc_bitmap_not()
: <a class="el" href="group__hwlocality__bitmap.php#ga4a8088d62755a083ffce9d592c9e3878">bitmap.h</a>
</li>
<li>hwloc_bitmap_only()
: <a class="el" href="group__hwlocality__bitmap.php#ga8ea10f5ebaadb8418f28f953d6106190">bitmap.h</a>
</li>
<li>hwloc_bitmap_or()
: <a class="el" href="group__hwlocality__bitmap.php#ga1ba1de709ee9a7cf5cc8ad2d9a1a81d4">bitmap.h</a>
</li>
<li>hwloc_bitmap_set()
: <a class="el" href="group__hwlocality__bitmap.php#ga497556af0cc34f109ae0277999c074d3">bitmap.h</a>
</li>
<li>hwloc_bitmap_set_ith_ulong()
: <a class="el" href="group__hwlocality__bitmap.php#ga56027d6b141a3da441925e6e999de1c1">bitmap.h</a>
</li>
<li>hwloc_bitmap_set_range()
: <a class="el" href="group__hwlocality__bitmap.php#ga9d4f8fc40f552a76c943b5b773ac17d6">bitmap.h</a>
</li>
<li>hwloc_bitmap_singlify()
: <a class="el" href="group__hwlocality__bitmap.php#ga4630aa1b7e08eac5b41be126194e84a1">bitmap.h</a>
</li>
<li>hwloc_bitmap_snprintf()
: <a class="el" href="group__hwlocality__bitmap.php#ga6c0d60db98f27276752c1e5fafcbd7d1">bitmap.h</a>
</li>
<li>hwloc_bitmap_sscanf()
: <a class="el" href="group__hwlocality__bitmap.php#ga553cd5ceb1925bfd31788e70b4a46ae8">bitmap.h</a>
</li>
<li>hwloc_bitmap_t
: <a class="el" href="group__hwlocality__bitmap.php#gaa3c2bf4c776d603dcebbb61b0c923d84">bitmap.h</a>
</li>
<li>hwloc_bitmap_taskset_asprintf()
: <a class="el" href="group__hwlocality__bitmap.php#gaa3df92e204ffb24ceddd44d8d58f6eaa">bitmap.h</a>
</li>
<li>hwloc_bitmap_taskset_snprintf()
: <a class="el" href="group__hwlocality__bitmap.php#gae0e0619f43a4af5efafb75f489c1c6ec">bitmap.h</a>
</li>
<li>hwloc_bitmap_taskset_sscanf()
: <a class="el" href="group__hwlocality__bitmap.php#ga71b28ef0d7206e37adbb94468c03e1a9">bitmap.h</a>
</li>
<li>hwloc_bitmap_to_ith_ulong()
: <a class="el" href="group__hwlocality__bitmap.php#gabc0b9f4cae56a1303c38b2380086efc2">bitmap.h</a>
</li>
<li>hwloc_bitmap_to_ulong()
: <a class="el" href="group__hwlocality__bitmap.php#ga4fee4e3cea99e4a389c54a6c3f0c78ed">bitmap.h</a>
</li>
<li>hwloc_bitmap_weight()
: <a class="el" href="group__hwlocality__bitmap.php#ga12d520387be74f849f191d7a06ac325c">bitmap.h</a>
</li>
<li>hwloc_bitmap_xor()
: <a class="el" href="group__hwlocality__bitmap.php#ga5743af61c30758df75aec29c12444616">bitmap.h</a>
</li>
<li>hwloc_bitmap_zero()
: <a class="el" href="group__hwlocality__bitmap.php#ga6c540b9fe63b8223b6aba46d56dd63b8">bitmap.h</a>
</li>
<li>hwloc_compare_types()
: <a class="el" href="group__hwlocality__types.php#gabd7da4f4ea12b420b8ecbde458b27805">hwloc.h</a>
</li>
<li>hwloc_compare_types_e
: <a class="el" href="group__hwlocality__types.php#ga46323568968005137c32f6a1cd405b74">hwloc.h</a>
</li>
<li>hwloc_const_bitmap_t
: <a class="el" href="group__hwlocality__bitmap.php#ga2fb1bbc8aea1ea22dee2f0fd39659f48">bitmap.h</a>
</li>
<li>hwloc_const_cpuset_t
: <a class="el" href="group__hwlocality__sets.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc.h</a>
</li>
<li>hwloc_const_nodeset_t
: <a class="el" href="group__hwlocality__sets.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc.h</a>
</li>
<li>hwloc_cpubind_flags_t
: <a class="el" href="group__hwlocality__cpubinding.php#ga217dc8d373f8958cc93c154ebce1c71c">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_NOMEMBIND
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71ca41ce440443cc3087caed95ab60edcad6">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_PROCESS
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71ca2e0dd0128dac6b03408c7dd170477fdc">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_STRICT
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71ca679a7e0f0c7ee06b123565f90d98e7fa">hwloc.h</a>
</li>
<li>HWLOC_CPUBIND_THREAD
: <a class="el" href="group__hwlocality__cpubinding.php#gga217dc8d373f8958cc93c154ebce1c71caf1b6bbad00d7b1017b918e3719f4d421">hwloc.h</a>
</li>
<li>hwloc_cpuset_from_glibc_sched_affinity()
: <a class="el" href="group__hwlocality__glibc__sched.php#ga6df504b2f5440b527be05cdad6b1655e">glibc-sched.h</a>
</li>
<li>hwloc_cpuset_from_linux_libnuma_bitmask()
: <a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#ga47747968f12c2674d2840dfbacce4940">linux-libnuma.h</a>
</li>
<li>hwloc_cpuset_from_linux_libnuma_nodemask()
: <a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#gac24c9e4bb2eab3e23b2039559adc9df8">linux-libnuma.h</a>
</li>
<li>hwloc_cpuset_from_linux_libnuma_ulongs()
: <a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#gafa60816dde33d69149497bcf6c7818e0">linux-libnuma.h</a>
</li>
<li>hwloc_cpuset_from_nodeset()
: <a class="el" href="group__hwlocality__helper__nodeset__convert.php#gaa677fd588304b5615de4ea78104adfb5">helper.h</a>
</li>
<li>hwloc_cpuset_from_nodeset_strict()
: <a class="el" href="group__hwlocality__helper__nodeset__convert.php#gaa7c3f39802b00a758c58e024a8119979">helper.h</a>
</li>
<li>hwloc_cpuset_t
: <a class="el" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc.h</a>
</li>
<li>hwloc_cpuset_to_glibc_sched_affinity()
: <a class="el" href="group__hwlocality__glibc__sched.php#ga39454e6013441d32e58ef4c4fcba7e4b">glibc-sched.h</a>
</li>
<li>hwloc_cpuset_to_linux_libnuma_bitmask()
: <a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#ga067ec565345a346bfd9d721cff5901ae">linux-libnuma.h</a>
</li>
<li>hwloc_cpuset_to_linux_libnuma_nodemask()
: <a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#ga36feb81315de87ce11d9a5aa2b4c6e6d">linux-libnuma.h</a>
</li>
<li>hwloc_cpuset_to_linux_libnuma_ulongs()
: <a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#ga018e57a42a780ce2ba2e35ef975d8888">linux-libnuma.h</a>
</li>
<li>hwloc_cpuset_to_nodeset()
: <a class="el" href="group__hwlocality__helper__nodeset__convert.php#ga60ecc4ae480c28b5fbd34aca4fc37daa">helper.h</a>
</li>
<li>hwloc_cpuset_to_nodeset_strict()
: <a class="el" href="group__hwlocality__helper__nodeset__convert.php#ga9162785e39d7c697f76f99524c4a2fb4">helper.h</a>
</li>
<li>hwloc_cuda_get_device_cpuset()
: <a class="el" href="group__hwlocality__cuda.php#gae06cf330d2f0d9949feb52b146b7d136">cuda.h</a>
</li>
<li>hwloc_cudart_get_device_cpuset()
: <a class="el" href="group__hwlocality__cudart.php#ga2daaf1dd1a9a7f11ccbc6821374120e9">cudart.h</a>
</li>
<li>hwloc_distribute()
: <a class="el" href="group__hwlocality__helper__binding.php#ga6d5c88292ad5aa062c1bebc99369c042">helper.h</a>
</li>
<li>hwloc_distributev()
: <a class="el" href="group__hwlocality__helper__binding.php#gaf057d7c5e3cb3df897ce527258537619">helper.h</a>
</li>
<li>hwloc_free()
: <a class="el" href="group__hwlocality__membinding.php#ga986d9b4cc76da592c4b937c6cb7d9d56">hwloc.h</a>
</li>
<li>hwloc_get_ancestor_obj_by_depth()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#gafa813c4ff8d610b3e158224a56386b2f">helper.h</a>
</li>
<li>hwloc_get_ancestor_obj_by_type()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#ga20ade151cb33991b4cd960924a830764">helper.h</a>
</li>
<li>hwloc_get_api_version()
: <a class="el" href="group__hwlocality__api__version.php#ga61ef7566efe550d314b0ce4f3421ec5d">hwloc.h</a>
</li>
<li>hwloc_get_area_membind()
: <a class="el" href="group__hwlocality__membinding.php#gac02ee8f7606382ea7855ae4e1656ed0f">hwloc.h</a>
</li>
<li>hwloc_get_area_membind_nodeset()
: <a class="el" href="group__hwlocality__membinding.php#ga106e6fcd764d17be682faf7a5bc95720">hwloc.h</a>
</li>
<li>hwloc_get_cache_covering_cpuset()
: <a class="el" href="group__hwlocality__helper__find__cache.php#gae744419648117cbd613a038074aa0627">helper.h</a>
</li>
<li>hwloc_get_child_covering_cpuset()
: <a class="el" href="group__hwlocality__helper__find__covering.php#gab56b99460194bbcb36016d36d55132a7">helper.h</a>
</li>
<li>hwloc_get_closest_objs()
: <a class="el" href="group__hwlocality__helper__traversal.php#ga26c2ac4f25b1ed293249c88e232f1bea">helper.h</a>
</li>
<li>hwloc_get_common_ancestor_obj()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#gac574b7b06d2d937002dd538e08dbd554">helper.h</a>
</li>
<li>hwloc_get_cpubind()
: <a class="el" href="group__hwlocality__cpubinding.php#gab52f83ab16eac465da55e16bdd30df77">hwloc.h</a>
</li>
<li>hwloc_get_depth_type()
: <a class="el" href="group__hwlocality__information.php#gadd4964764ae7e49231065d58a553fd31">hwloc.h</a>
</li>
<li>hwloc_get_distance_matrix_covering_obj_by_depth()
: <a class="el" href="group__hwlocality__distances.php#ga186ac2711b98a12cf46d58cd005fbb51">helper.h</a>
</li>
<li>hwloc_get_first_largest_obj_inside_cpuset()
: <a class="el" href="group__hwlocality__helper__find__inside.php#gabcd5fa81a95fa5335950cae092277d5b">helper.h</a>
</li>
<li>hwloc_get_largest_objs_inside_cpuset()
: <a class="el" href="group__hwlocality__helper__find__inside.php#gaab04c89623662e63a48ed2cd48eb601c">helper.h</a>
</li>
<li>hwloc_get_last_cpu_location()
: <a class="el" href="group__hwlocality__cpubinding.php#ga8e9a4b5ee3eaa18fd3a229790c6b5b17">hwloc.h</a>
</li>
<li>hwloc_get_latency()
: <a class="el" href="group__hwlocality__distances.php#ga9addde99e34b815df47625f1d6191839">helper.h</a>
</li>
<li>hwloc_get_membind()
: <a class="el" href="group__hwlocality__membinding.php#gab07aedba1119f99130e5f0b796b7d8a5">hwloc.h</a>
</li>
<li>hwloc_get_membind_nodeset()
: <a class="el" href="group__hwlocality__membinding.php#ga7b46a4ca0b2db9723ca73b0c148ccd93">hwloc.h</a>
</li>
<li>hwloc_get_nbobjs_by_depth()
: <a class="el" href="group__hwlocality__information.php#ga20cfe2456f4cfdd789c9aca6d2fdd69f">hwloc.h</a>
</li>
<li>hwloc_get_nbobjs_by_type()
: <a class="el" href="group__hwlocality__information.php#ga0131ab1051011fabfa69d7c1853e716c">hwloc.h</a>
</li>
<li>hwloc_get_nbobjs_inside_cpuset_by_depth()
: <a class="el" href="group__hwlocality__helper__find__inside.php#ga6807db0012369efe19b8d3dcee235493">helper.h</a>
</li>
<li>hwloc_get_nbobjs_inside_cpuset_by_type()
: <a class="el" href="group__hwlocality__helper__find__inside.php#ga72c5bc4317a4c3938e32447b769813a0">helper.h</a>
</li>
<li>hwloc_get_next_child()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#gae5ef1af636849f77714e1584ba78cf9c">helper.h</a>
</li>
<li>hwloc_get_next_obj_by_depth()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#gab7c1dce3f42ece5bfa621e87cf332418">helper.h</a>
</li>
<li>hwloc_get_next_obj_by_type()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#ga5f08ceb69375341e73563cfe2e77534e">helper.h</a>
</li>
<li>hwloc_get_next_obj_covering_cpuset_by_depth()
: <a class="el" href="group__hwlocality__helper__find__coverings.php#ga2f9a4ec15e9cfae8c21501257a51ce5b">helper.h</a>
</li>
<li>hwloc_get_next_obj_covering_cpuset_by_type()
: <a class="el" href="group__hwlocality__helper__find__coverings.php#ga5915ea30f326676b3a4cfff371ce04d1">helper.h</a>
</li>
<li>hwloc_get_next_obj_inside_cpuset_by_depth()
: <a class="el" href="group__hwlocality__helper__find__inside.php#ga8af256c2572f16520f95440b884c1bd6">helper.h</a>
</li>
<li>hwloc_get_next_obj_inside_cpuset_by_type()
: <a class="el" href="group__hwlocality__helper__find__inside.php#ga934e7ecd68b33403e0c0be779d9ed1e6">helper.h</a>
</li>
<li>hwloc_get_obj_below_array_by_type()
: <a class="el" href="group__hwlocality__helper__traversal.php#ga340bb7021204078c30382ea77d38bde9">helper.h</a>
</li>
<li>hwloc_get_obj_below_by_type()
: <a class="el" href="group__hwlocality__helper__traversal.php#ga3d32c128aa36b5c9d56f6bf9e70d0e78">helper.h</a>
</li>
<li>hwloc_get_obj_by_depth()
: <a class="el" href="group__hwlocality__traversal.php#gaedd78240b0c1108355586a268ec5a697">hwloc.h</a>
</li>
<li>hwloc_get_obj_by_type()
: <a class="el" href="group__hwlocality__traversal.php#ga701f83b2cf0cb8e0acd58cd2dc1c67a2">hwloc.h</a>
</li>
<li>hwloc_get_obj_covering_cpuset()
: <a class="el" href="group__hwlocality__helper__find__covering.php#ga2a0de36ea0c3c70fb5f4cba0bb192582">helper.h</a>
</li>
<li>hwloc_get_obj_inside_cpuset_by_depth()
: <a class="el" href="group__hwlocality__helper__find__inside.php#ga20703980008f82379f98f56857611a1a">helper.h</a>
</li>
<li>hwloc_get_obj_inside_cpuset_by_type()
: <a class="el" href="group__hwlocality__helper__find__inside.php#ga50a80a0021e5843d968c3b97aebaad9b">helper.h</a>
</li>
<li>hwloc_get_proc_cpubind()
: <a class="el" href="group__hwlocality__cpubinding.php#gaa1373a002b9a0a87eb002e26c590f2da">hwloc.h</a>
</li>
<li>hwloc_get_proc_last_cpu_location()
: <a class="el" href="group__hwlocality__cpubinding.php#ga1e005ddb9701e6a993a9eb8abe67a710">hwloc.h</a>
</li>
<li>hwloc_get_proc_membind()
: <a class="el" href="group__hwlocality__membinding.php#gabaf9c13f1fa301d6895594cec52226e2">hwloc.h</a>
</li>
<li>hwloc_get_proc_membind_nodeset()
: <a class="el" href="group__hwlocality__membinding.php#ga22074ed072e1039f74f17f7b16e9e39d">hwloc.h</a>
</li>
<li>hwloc_get_pu_obj_by_os_index()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#ga61e00b83e7e0a1a946dc1bb29c49ccba">helper.h</a>
</li>
<li>hwloc_get_root_obj()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#ga632edae4a651996895ebde85ea2c1264">helper.h</a>
</li>
<li>hwloc_get_shared_cache_covering_obj()
: <a class="el" href="group__hwlocality__helper__find__cache.php#ga75e961873d4b976ab10bc4739248c96d">helper.h</a>
</li>
<li>hwloc_get_type_depth()
: <a class="el" href="group__hwlocality__information.php#gaea7c64dd59467f5201ba87712710b14d">hwloc.h</a>
</li>
<li>hwloc_get_type_depth_e
: <a class="el" href="group__hwlocality__information.php#gaf4e663cf42bbe20756b849c6293ef575">hwloc.h</a>
</li>
<li>hwloc_get_type_or_above_depth()
: <a class="el" href="group__hwlocality__helper__types.php#ga24b9cd5917fcebac6e45ae38d0a6cda4">helper.h</a>
</li>
<li>hwloc_get_type_or_below_depth()
: <a class="el" href="group__hwlocality__helper__types.php#ga0ffafb4c0ae13b9a7541ca820ca34883">helper.h</a>
</li>
<li>hwloc_get_whole_distance_matrix_by_depth()
: <a class="el" href="group__hwlocality__distances.php#ga48dfec8b8ba1fb8f2073ecd0728f0ca6">helper.h</a>
</li>
<li>hwloc_get_whole_distance_matrix_by_type()
: <a class="el" href="group__hwlocality__distances.php#ga9979237728f7a00a38836e15a8e8cd17">helper.h</a>
</li>
<li>hwloc_ibv_get_device_cpuset()
: <a class="el" href="group__hwlocality__openfabrics.php#gaa8ea979ce3a9b8c70ae80bc5716a0fbe">openfabrics-verbs.h</a>
</li>
<li>hwloc_linux_get_tid_cpubind()
: <a class="el" href="group__hwlocality__linux.php#gaf36a9211a21eb930f59090eb5d460b8e">linux.h</a>
</li>
<li>hwloc_linux_parse_cpumap_file()
: <a class="el" href="group__hwlocality__linux.php#gaeacad897c30dbea284948374ad4b010c">linux.h</a>
</li>
<li>hwloc_linux_set_tid_cpubind()
: <a class="el" href="group__hwlocality__linux.php#gaaaca5d1687053b6c3326b2c165bd6530">linux.h</a>
</li>
<li>HWLOC_MEMBIND_BIND
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8ad811fa4b2a6002c4d63695a408ffde2c">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_DEFAULT
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8a18675bb80ebc1bce5b652e9de8f3998c">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_FIRSTTOUCH
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">hwloc.h</a>
</li>
<li>hwloc_membind_flags_t
: <a class="el" href="group__hwlocality__membinding.php#gab00475fd98815bf4fb9aaf752030e7d2">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_INTERLEAVE
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8ae370075e5af016d42310f87ea5af236b">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_MIGRATE
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2aa6e49e54f52827cb143cc869cfd748af">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_MIXED
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8a3185bd869b67817fb2bd5164bf360402">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_NEXTTOUCH
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8aecdd4164d647708fbb51a00d98dbb138">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_NOCPUBIND
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2aad6b9eaf2ee324ca58dc8f58094b9997">hwloc.h</a>
</li>
<li>hwloc_membind_policy_t
: <a class="el" href="group__hwlocality__membinding.php#gac9764f79505775d06407b40f5e4661e8">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_PROCESS
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2a1b1b74aef138f64aff214a8cbdfe8eb4">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_REPLICATE
: <a class="el" href="group__hwlocality__membinding.php#ggac9764f79505775d06407b40f5e4661e8afb37480fe5f4236eb7dd4aef26f691e9">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_STRICT
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2a0335311a0ee04166df2888d52b4a42c6">hwloc.h</a>
</li>
<li>HWLOC_MEMBIND_THREAD
: <a class="el" href="group__hwlocality__membinding.php#ggab00475fd98815bf4fb9aaf752030e7d2a1dc7dd5cdcd5796893a325a524555298">hwloc.h</a>
</li>
<li>hwloc_mx_board_get_device_cpuset()
: <a class="el" href="group__hwlocality__myriexpress.php#ga87f4746d0cad579ce4e86b98088f22a1">myriexpress.h</a>
</li>
<li>hwloc_mx_endpoint_get_device_cpuset()
: <a class="el" href="group__hwlocality__myriexpress.php#ga2ff7763b9c2c5975f9a2e3d638351535">myriexpress.h</a>
</li>
<li>hwloc_nodeset_from_linux_libnuma_bitmask()
: <a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#ga5a1d17375cc7b65cd155330008cbdb6a">linux-libnuma.h</a>
</li>
<li>hwloc_nodeset_from_linux_libnuma_nodemask()
: <a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#ga22862f485346ae3b2ab7d052f538fc5f">linux-libnuma.h</a>
</li>
<li>hwloc_nodeset_from_linux_libnuma_ulongs()
: <a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#ga5b51a4a96a0c3ad9f4c0da308bbf4d8f">linux-libnuma.h</a>
</li>
<li>hwloc_nodeset_t
: <a class="el" href="group__hwlocality__sets.php#ga37e35730fa7e775b5bb0afe893d6d508">hwloc.h</a>
</li>
<li>hwloc_nodeset_to_linux_libnuma_bitmask()
: <a class="el" href="group__hwlocality__linux__libnuma__bitmask.php#gaa2c4cb4075422a19e07c450dc7092e69">linux-libnuma.h</a>
</li>
<li>hwloc_nodeset_to_linux_libnuma_nodemask()
: <a class="el" href="group__hwlocality__linux__libnuma__nodemask.php#gafa4e7cc68f0f99724f8d99541d9ab3de">linux-libnuma.h</a>
</li>
<li>hwloc_nodeset_to_linux_libnuma_ulongs()
: <a class="el" href="group__hwlocality__linux__libnuma__ulongs.php#gaf213df50d229c5d17a5a56b5d8f10b74">linux-libnuma.h</a>
</li>
<li>hwloc_obj_attr_snprintf()
: <a class="el" href="group__hwlocality__conversion.php#ga0db8286d7f3ceda8defd76e3e1e2b284">hwloc.h</a>
</li>
<li>HWLOC_OBJ_CACHE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a56ee0b7eca88f363b75b34fdde8c9ddc">hwloc.h</a>
</li>
<li>HWLOC_OBJ_CORE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f">hwloc.h</a>
</li>
<li>hwloc_obj_cpuset_snprintf()
: <a class="el" href="group__hwlocality__conversion.php#gabbfb92224c992c0e2ecef6b6e45260f2">hwloc.h</a>
</li>
<li>hwloc_obj_get_info_by_name()
: <a class="el" href="group__hwlocality__conversion.php#ga1f41387433f4c9e9c14b9f2e522919e4">hwloc.h</a>
</li>
<li>HWLOC_OBJ_GROUP
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56">hwloc.h</a>
</li>
<li>hwloc_obj_is_in_subtree()
: <a class="el" href="group__hwlocality__helper__traversal__basic.php#ga38d9bd3a7566d0e6b0ab95d652557707">helper.h</a>
</li>
<li>HWLOC_OBJ_MACHINE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3f4e83ffc4a259354959ae8a9eaa2a80">hwloc.h</a>
</li>
<li>HWLOC_OBJ_MISC
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a19f8a6953fa91efc76bcbcdf2d22de4d">hwloc.h</a>
</li>
<li>HWLOC_OBJ_NODE
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd">hwloc.h</a>
</li>
<li>HWLOC_OBJ_PU
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661">hwloc.h</a>
</li>
<li>hwloc_obj_snprintf()
: <a class="el" href="group__hwlocality__conversion.php#ga5c6a61a83f4790b421e2f62e9088446f">hwloc.h</a>
</li>
<li>HWLOC_OBJ_SOCKET
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a1ac6e07775ae4324b3fe9dbd72c785ec">hwloc.h</a>
</li>
<li>HWLOC_OBJ_SYSTEM
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55a3aa1b842d1fd4207ebce171f95a244ec">hwloc.h</a>
</li>
<li>hwloc_obj_t
: <a class="el" href="group__hwlocality__objects.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc.h</a>
</li>
<li>HWLOC_OBJ_TYPE_MAX
: <a class="el" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55addb5f843e1812445a84e6b2a844b1ebc">hwloc.h</a>
</li>
<li>hwloc_obj_type_of_string()
: <a class="el" href="group__hwlocality__conversion.php#gade722091ae392fdc79557e797a16c370">hwloc.h</a>
</li>
<li>hwloc_obj_type_snprintf()
: <a class="el" href="group__hwlocality__conversion.php#ga3ad856e8f3487d340c82a23b8a2a0351">hwloc.h</a>
</li>
<li>hwloc_obj_type_string()
: <a class="el" href="group__hwlocality__conversion.php#ga7c61920feca6fd9006d930dabfc09058">hwloc.h</a>
</li>
<li>hwloc_obj_type_t
: <a class="el" href="group__hwlocality__types.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc.h</a>
</li>
<li>HWLOC_RESTRICT_FLAG_ADAPT_DISTANCES
: <a class="el" href="group__hwlocality__tinker.php#gga9d80f08eb25b7ac22f1b998dc8bf521fa4d18407f5520793b50b9e892f5bb55d1">hwloc.h</a>
</li>
<li>HWLOC_RESTRICT_FLAG_ADAPT_MISC
: <a class="el" href="group__hwlocality__tinker.php#gga9d80f08eb25b7ac22f1b998dc8bf521fa699969227a09bbc1a7de51dc9fb7be4b">hwloc.h</a>
</li>
<li>hwloc_restrict_flags_e
: <a class="el" href="group__hwlocality__tinker.php#ga9d80f08eb25b7ac22f1b998dc8bf521f">hwloc.h</a>
</li>
<li>hwloc_set_area_membind()
: <a class="el" href="group__hwlocality__membinding.php#ga06594edeb4728cb9e014aed924d1e74a">hwloc.h</a>
</li>
<li>hwloc_set_area_membind_nodeset()
: <a class="el" href="group__hwlocality__membinding.php#gade5e2c28ea8475a479bf2b1df36c6ccd">hwloc.h</a>
</li>
<li>hwloc_set_cpubind()
: <a class="el" href="group__hwlocality__cpubinding.php#gaf4cc194d5c0d38004a21b9f03522a7e3">hwloc.h</a>
</li>
<li>hwloc_set_membind()
: <a class="el" href="group__hwlocality__membinding.php#ga8b6d1d90227aff8e44ef26bc1f8a8f95">hwloc.h</a>
</li>
<li>hwloc_set_membind_nodeset()
: <a class="el" href="group__hwlocality__membinding.php#ga747962cbb16fd12ad6d126011c734a27">hwloc.h</a>
</li>
<li>hwloc_set_proc_cpubind()
: <a class="el" href="group__hwlocality__cpubinding.php#gac0ef3510b4e9c1273029ecf94e8c9686">hwloc.h</a>
</li>
<li>hwloc_set_proc_membind()
: <a class="el" href="group__hwlocality__membinding.php#gac63c4517e71b3f0d41b3dee3e83dc55c">hwloc.h</a>
</li>
<li>hwloc_set_proc_membind_nodeset()
: <a class="el" href="group__hwlocality__membinding.php#gaf10d18cd4703ec980d7440a1c23fa07f">hwloc.h</a>
</li>
<li>hwloc_topology_check()
: <a class="el" href="group__hwlocality__creation.php#gab3628b2a540a5a08e8cf724ef829e70a">hwloc.h</a>
</li>
<li>hwloc_topology_destroy()
: <a class="el" href="group__hwlocality__creation.php#ga6040925d3ee4bbb2647f2a321aca5f4b">hwloc.h</a>
</li>
<li>hwloc_topology_export_xml()
: <a class="el" href="group__hwlocality__tinker.php#ga1c9d8e608232206ce2142fe806a6835b">hwloc.h</a>
</li>
<li>hwloc_topology_export_xmlbuffer()
: <a class="el" href="group__hwlocality__tinker.php#gad77e72a2ccf32825511818988a09e5c1">hwloc.h</a>
</li>
<li>HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM
: <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea6ecb6abc6a0bb75e81564f8bca85783b">hwloc.h</a>
</li>
<li>HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM
: <a class="el" href="group__hwlocality__configuration.php#ggada025d3ec20b4b420f8038d23d6e7bdea129b4fea1300be22bbaf0bb0958994c8">hwloc.h</a>
</li>
<li>hwloc_topology_flags_e
: <a class="el" href="group__hwlocality__configuration.php#gada025d3ec20b4b420f8038d23d6e7bde">hwloc.h</a>
</li>
<li>hwloc_topology_get_allowed_cpuset()
: <a class="el" href="group__hwlocality__helper__cpuset.php#ga95f116c4c0b1ff2c6418c16341fc2e57">helper.h</a>
</li>
<li>hwloc_topology_get_allowed_nodeset()
: <a class="el" href="group__hwlocality__helper__nodeset.php#ga5d829323f8d283687be43ea8c894eb3b">helper.h</a>
</li>
<li>hwloc_topology_get_complete_cpuset()
: <a class="el" href="group__hwlocality__helper__cpuset.php#ga75f0ac3ac41e9915541c3ae3153a6e26">helper.h</a>
</li>
<li>hwloc_topology_get_complete_nodeset()
: <a class="el" href="group__hwlocality__helper__nodeset.php#gaf8331b6d5e60c463f7ebe21a878561d4">helper.h</a>
</li>
<li>hwloc_topology_get_depth()
: <a class="el" href="group__hwlocality__information.php#ga8c30b0cec55074eb3ed34e4f2a1a9937">hwloc.h</a>
</li>
<li>hwloc_topology_get_online_cpuset()
: <a class="el" href="group__hwlocality__helper__cpuset.php#gad00abc77f1670049a5b2139471d0c8db">helper.h</a>
</li>
<li>hwloc_topology_get_support()
: <a class="el" href="group__hwlocality__configuration.php#gac2126e105f3ae708efca2e90d612625a">hwloc.h</a>
</li>
<li>hwloc_topology_get_topology_cpuset()
: <a class="el" href="group__hwlocality__helper__cpuset.php#ga4497338d1cbae6f8a6d68cb14234d5d8">helper.h</a>
</li>
<li>hwloc_topology_get_topology_nodeset()
: <a class="el" href="group__hwlocality__helper__nodeset.php#gae6821ede7676dfac0515a4b7b04b0397">helper.h</a>
</li>
<li>hwloc_topology_ignore_all_keep_structure()
: <a class="el" href="group__hwlocality__configuration.php#gaec6fb00050f50cd41007f1ae580d2106">hwloc.h</a>
</li>
<li>hwloc_topology_ignore_type()
: <a class="el" href="group__hwlocality__configuration.php#gaf2071c8621fddc53649c245d87835b47">hwloc.h</a>
</li>
<li>hwloc_topology_ignore_type_keep_structure()
: <a class="el" href="group__hwlocality__configuration.php#ga6ddd4213d95bd1c30555b294a60efa6b">hwloc.h</a>
</li>
<li>hwloc_topology_init()
: <a class="el" href="group__hwlocality__creation.php#ga5c2d6f476af87005c7bd0811d4548b9f">hwloc.h</a>
</li>
<li>hwloc_topology_insert_misc_object_by_cpuset()
: <a class="el" href="group__hwlocality__tinker.php#ga017a9ba16d554326c6e3812d545d7230">hwloc.h</a>
</li>
<li>hwloc_topology_insert_misc_object_by_parent()
: <a class="el" href="group__hwlocality__tinker.php#gadacd7a3d21220fbb30c3256d8b22a294">hwloc.h</a>
</li>
<li>hwloc_topology_is_thissystem()
: <a class="el" href="group__hwlocality__information.php#ga0d109e33fc7990f62f665d336e5e5111">hwloc.h</a>
</li>
<li>hwloc_topology_load()
: <a class="el" href="group__hwlocality__creation.php#ga91e2e6427b95fb7339c99dbbef996e71">hwloc.h</a>
</li>
<li>hwloc_topology_restrict()
: <a class="el" href="group__hwlocality__tinker.php#gad75fa918e3eb54663bdeab25ed89b648">hwloc.h</a>
</li>
<li>hwloc_topology_set_distance_matrix()
: <a class="el" href="group__hwlocality__configuration.php#gabda6afa67a495cd652f064ad51d3fe47">hwloc.h</a>
</li>
<li>hwloc_topology_set_flags()
: <a class="el" href="group__hwlocality__configuration.php#ga6d11e53db143ac39c32cdb3912b71f99">hwloc.h</a>
</li>
<li>hwloc_topology_set_fsroot()
: <a class="el" href="group__hwlocality__configuration.php#ga2f6bfb6958d8b508ea1d7d5bb266432c">hwloc.h</a>
</li>
<li>hwloc_topology_set_pid()
: <a class="el" href="group__hwlocality__configuration.php#gae1100de0162b3c6a9db750ac14629c05">hwloc.h</a>
</li>
<li>hwloc_topology_set_synthetic()
: <a class="el" href="group__hwlocality__configuration.php#ga2fcb52181b586c20f001b7a999550324">hwloc.h</a>
</li>
<li>hwloc_topology_set_xml()
: <a class="el" href="group__hwlocality__configuration.php#ga93efcc8a962afe1ed23393700682173f">hwloc.h</a>
</li>
<li>hwloc_topology_set_xmlbuffer()
: <a class="el" href="group__hwlocality__configuration.php#gae7e4bade144652a2b48f5eaf0309b4ec">hwloc.h</a>
</li>
<li>hwloc_topology_t
: <a class="el" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc.h</a>
</li>
<li>HWLOC_TYPE_DEPTH_MULTIPLE
: <a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575ae99465995cacde6c210d5fc2e409798c">hwloc.h</a>
</li>
<li>HWLOC_TYPE_DEPTH_UNKNOWN
: <a class="el" href="group__hwlocality__information.php#ggaf4e663cf42bbe20756b849c6293ef575a0565ab92ab72cb0cec91e23003294aad">hwloc.h</a>
</li>
<li>HWLOC_TYPE_UNORDERED
: <a class="el" href="group__hwlocality__types.php#gga46323568968005137c32f6a1cd405b74a2f8297ea36eba46e7596e810a67298fb">hwloc.h</a>
</li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
