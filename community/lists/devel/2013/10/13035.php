<?
$subject_val = "Re: [OMPI devel] 1.7.3rc2 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  1 20:21:36 2013" -->
<!-- isoreceived="20131002002136" -->
<!-- sent="Wed, 2 Oct 2013 00:21:33 +0000" -->
<!-- isosent="20131002002133" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.3rc2 is out" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A2DE45316_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F914BDA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.3rc2 is out<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-01 20:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13036.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="13034.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13034.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.3rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting the following failure on two hosts, 1 proc per host. We are running SLURM 2.6.2.
<br>
<p>joshual_at_mir13 ~/ompi_1.7/openmpi-1.7.3rc1/examples 
<br>
$mpirun -np 2 -bynode hostname
<br>
*** buffer overflow detected ***: mpirun terminated
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6(__fortify_fail+0x37)[0x3e564ff3f7]
<br>
/lib64/libc.so.6[0x3e564fd2e0]
<br>
/lib64/libc.so.6[0x3e564fc9db]
<br>
/lib64/libc.so.6(__snprintf_chk+0x7a)[0x3e564fc8aa]
<br>
/usr/lib64/libpmi2.so.0(+0x18ff)[0x7ff671cda8ff]
<br>
/usr/lib64/libpmi2.so.0(+0x1e5b)[0x7ff671cdae5b]
<br>
/usr/lib64/libpmi2.so.0(PMI2_Job_GetId+0x98)[0x7ff671cddc58]
<br>
/hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_pmi.so(+0x177d)[0x7ff671ef477d]
<br>
/hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-pal.so.5(opal_db_base_select+0xdd)[0x7ff6737eb33d]
<br>
/hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_ess_hnp.so(+0x3266)[0x7ff673123266]
<br>
/hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-rte.so.5(orte_init+0x17f)[0x7ff673a7251f]
<br>
mpirun(orterun+0x6b5)[0x403e25]
<br>
mpirun(main+0x20)[0x4035c4]
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x3e5641ecdd]
<br>
mpirun[0x4034e9]
<br>
======= Memory map: ========
<br>
00400000-0040d000 r-xp 00000000 00:18 29289341                           /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/bin/orterun
<br>
0060c000-0060e000 rw-p 0000c000 00:18 29289341                           /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/bin/orterun
<br>
0060e000-0060f000 rw-p 00000000 00:00 0 
<br>
00b8b000-00ccd000 rw-p 00000000 00:00 0                                  [heap]
<br>
3e55c00000-3e55c20000 r-xp 00000000 08:01 620577                         /lib64/ld-2.12.so
<br>
3e55e1f000-3e55e20000 r--p 0001f000 08:01 620577                         /lib64/ld-2.12.so
<br>
3e55e20000-3e55e21000 rw-p 00020000 08:01 620577                         /lib64/ld-2.12.so
<br>
3e55e21000-3e55e22000 rw-p 00000000 00:00 0 
<br>
3e56000000-3e56002000 r-xp 00000000 08:01 620581                         /lib64/libdl-2.12.so
<br>
3e56002000-3e56202000 ---p 00002000 08:01 620581                         /lib64/libdl-2.12.so
<br>
3e56202000-3e56203000 r--p 00002000 08:01 620581                         /lib64/libdl-2.12.so
<br>
3e56203000-3e56204000 rw-p 00003000 08:01 620581                         /lib64/libdl-2.12.so
<br>
3e56400000-3e56597000 r-xp 00000000 08:01 620578                         /lib64/libc-2.12.so
<br>
3e56597000-3e56797000 ---p 00197000 08:01 620578                         /lib64/libc-2.12.so
<br>
3e56797000-3e5679b000 r--p 00197000 08:01 620578                         /lib64/libc-2.12.so
<br>
3e5679b000-3e5679c000 rw-p 0019b000 08:01 620578                         /lib64/libc-2.12.so
<br>
3e5679c000-3e567a1000 rw-p 00000000 00:00 0 
<br>
3e56800000-3e56883000 r-xp 00000000 08:01 620585                         /lib64/libm-2.12.so
<br>
3e56883000-3e56a82000 ---p 00083000 08:01 620585                         /lib64/libm-2.12.so
<br>
3e56a82000-3e56a83000 r--p 00082000 08:01 620585                         /lib64/libm-2.12.so
<br>
3e56a83000-3e56a84000 rw-p 00083000 08:01 620585                         /lib64/libm-2.12.so
<br>
3e56c00000-3e56c17000 r-xp 00000000 08:01 620580                         /lib64/libpthread-2.12.so
<br>
3e56c17000-3e56e16000 ---p 00017000 08:01 620580                         /lib64/libpthread-2.12.so
<br>
3e56e16000-3e56e17000 r--p 00016000 08:01 620580                         /lib64/libpthread-2.12.so
<br>
3e56e17000-3e56e18000 rw-p 00017000 08:01 620580                         /lib64/libpthread-2.12.so
<br>
3e56e18000-3e56e1c000 rw-p 00000000 00:00 0 
<br>
3e57400000-3e57407000 r-xp 00000000 08:01 620582                         /lib64/librt-2.12.so
<br>
3e57407000-3e57606000 ---p 00007000 08:01 620582                         /lib64/librt-2.12.so
<br>
3e57606000-3e57607000 r--p 00006000 08:01 620582                         /lib64/librt-2.12.so
<br>
3e57607000-3e57608000 rw-p 00007000 08:01 620582                         /lib64/librt-2.12.so
<br>
3e57c00000-3e57c08000 r-xp 00000000 08:01 228599                         /usr/lib64/libpciaccess.so.0.10.8
<br>
3e57c08000-3e57e07000 ---p 00008000 08:01 228599                         /usr/lib64/libpciaccess.so.0.10.8
<br>
3e57e07000-3e57e08000 rw-p 00007000 08:01 228599                         /usr/lib64/libpciaccess.so.0.10.8
<br>
3e5a400000-3e5a416000 r-xp 00000000 08:01 620586                         /lib64/libgcc_s-4.4.6-20110824.so.1
<br>
3e5a416000-3e5a615000 ---p 00016000 08:01 620586                         /lib64/libgcc_s-4.4.6-20110824.so.1
<br>
3e5a615000-3e5a616000 rw-p 00015000 08:01 620586                         /lib64/libgcc_s-4.4.6-20110824.so.1
<br>
3e66000000-3e66016000 r-xp 00000000 08:01 620617                         /lib64/libnsl-2.12.so
<br>
3e66016000-3e66215000 ---p 00016000 08:01 620617                         /lib64/libnsl-2.12.so
<br>
3e66215000-3e66216000 r--p 00015000 08:01 620617                         /lib64/libnsl-2.12.so
<br>
3e66216000-3e66217000 rw-p 00016000 08:01 620617                         /lib64/libnsl-2.12.so
<br>
3e66217000-3e66219000 rw-p 00000000 00:00 0 
<br>
3e66a00000-3e66a02000 r-xp 00000000 08:01 620607                         /lib64/libutil-2.12.so
<br>
3e66a02000-3e66c01000 ---p 00002000 08:01 620607                         /lib64/libutil-2.12.so
<br>
3e66c01000-3e66c02000 r--p 00001000 08:01 620607                         /lib64/libutil-2.12.so
<br>
3e66c02000-3e66c03000 rw-p 00002000 08:01 620607                         /lib64/libutil-2.12.so
<br>
7ff6715af000-7ff6715b1000 r-xp 00000000 00:18 34069953                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_print.so
<br>
7ff6715b1000-7ff6717b0000 ---p 00002000 00:18 34069953                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_print.so
<br>
7ff6717b0000-7ff6717b1000 rw-p 00001000 00:18 34069953                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_print.so
<br>
7ff6717b1000-7ff6718cc000 r-xp 00000000 08:01 229610                     /usr/lib64/libslurm.so.26.0.0
<br>
7ff6718cc000-7ff671acb000 ---p 0011b000 08:01 229610                     /usr/lib64/libslurm.so.26.0.0
<br>
7ff671acb000-7ff671ad1000 rw-p 0011a000 08:01 229610                     /usr/lib64/libslurm.so.26.0.0
<br>
7ff671ad1000-7ff671ad4000 rw-p 00000000 00:00 0 
<br>
7ff671ad4000-7ff671ad9000 r-xp 00000000 08:01 441833                     /usr/lib64/libpmi.so.0.0.0
<br>
7ff671ad9000-7ff671cd8000 ---p 00005000 08:01 441833                     /usr/lib64/libpmi.so.0.0.0
<br>
7ff671cd8000-7ff671cd9000 rw-p 00004000 08:01 441833                     /usr/lib64/libpmi.so.0.0.0
<br>
7ff671cd9000-7ff671ce2000 r-xp 00000000 08:01 229608                     /usr/lib64/libpmi2.so.0.0.0
<br>
7ff671ce2000-7ff671ee2000 ---p 00009000 08:01 229608                     /usr/lib64/libpmi2.so.0.0.0
<br>
7ff671ee2000-7ff671ee3000 rw-p 00009000 08:01 229608                     /usr/lib64/libpmi2.so.0.0.0
<br>
7ff671ee3000-7ff671ef3000 rw-p 00000000 00:00 0 
<br>
7ff671ef3000-7ff671ef6000 r-xp 00000000 00:18 34069957                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_pmi.so
<br>
7ff671ef6000-7ff6720f5000 ---p 00003000 00:18 34069957                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_pmi.so
<br>
7ff6720f5000-7ff6720f6000 rw-p 00002000 00:18 34069957                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_pmi.so
<br>
7ff6720f6000-7ff6720f9000 r-xp 00000000 00:18 30395385                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_routed_binomial.so
<br>
7ff6720f9000-7ff6722f9000 ---p 00003000 00:18 30395385                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_routed_binomial.so
<br>
7ff6722f9000-7ff6722fa000 rw-p 00003000 00:18 30395385                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_routed_binomial.so
<br>
7ff6722fa000-7ff672309000 r-xp 00000000 00:18 179525                     /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_oob_tcp.so
<br>
7ff672309000-7ff672508000 ---p 0000f000 00:18 179525                     /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_oob_tcp.so
<br>
7ff672508000-7ff67250a000 rw-p 0000e000 00:18 179525                     /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_oob_tcp.so
<br>
7ff67250a000-7ff67250d000 r-xp 00000000 00:18 179527                     /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_plm_slurm.so
<br>
7ff67250d000-7ff67270c000 ---p 00003000 00:18 179527                     /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_plm_slurm.so
<br>
7ff67270c000-7ff67270d000 rw-p 00002000 00:18 179527                     /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_plm_slurm.so
<br>
7ff67270f000-7ff672715000 r-xp 00000000 00:18 37434706                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_rml_oob.so
<br>
7ff672715000-7ff672914000 ---p 00006000 00:18 37434706                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_rml_oob.so
<br>
7ff672914000-7ff672915000 rw-p 00005000 00:18 37434706                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_rml_oob.so
<br>
7ff672915000-7ff672918000 r-xp 00000000 00:18 34069955                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_hash.so
<br>
7ff672918000-7ff672b17000 ---p 00003000 00:18 34069955                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_hash.so
<br>
7ff672b17000-7ff672b18000 rw-p 00002000 00:18 34069955                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_hash.so
<br>
7ff672b18000-7ff672b1a000 r-xp 00000000 00:18 46943492                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_errmgr_default_hnp.so
<br>
7ff672b1a000-7ff672d1a000 ---p 00002000 00:18 46943492                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_errmgr_default_hnp.so
<br>
7ff672d1a000-7ff672d1b000 rw-p 00002000 00:18 46943492                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_errmgr_default_hnp.so
<br>
7ff672d1b000-7ff672d1d000 r-xp 00000000 00:18 30395389                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_state_hnp.so
<br>
7ff672d1d000-7ff672f1c000 ---p 00002000 00:18 30395389                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_state_hnp.so
<br>
7ff672f1c000-7ff672f1d000 rw-p 00001000 00:18 30395389                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_state_hnp.so
<br>
7ff672f1d000-7ff672f1f000 r-xp 00000000 00:18 46943484                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_pstat_linux.so
<br>
7ff672f1f000-7ff67311f000 ---p 00002000 00:18 46943484                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_pstat_linux.so
<br>
7ff67311f000-7ff673120000 rw-p 00002000 00:18 46943484                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_pstat_linux.so
<br>
7ff673120000-7ff673125000 r-xp 00000000 00:18 46943504                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_ess_hnp.so
<br>
7ff673125000-7ff673325000 ---p 00005000 00:18 46943504                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_ess_hnp.so
<br>
7ff673325000-7ff673326000 rw-p 00005000 00:18 46943504                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_ess_hnp.so
<br>
7ff673327000-7ff673328000 r-xp 00000000 00:18 34069942                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libmca_common_pmi.so.1.0.0
<br>
7ff673328000-7ff673527000 ---p 00001000 00:18 34069942                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libmca_common_pmi.so.1.0.0
<br>
7ff673527000-7ff673528000 rw-p 00000000 00:18 34069942                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libmca_common_pmi.so.1.0.0
<br>
7ff673528000-7ff67352b000 r-xp 00000000 00:18 46943486                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_shmem_mmap.so
<br>
7ff67352b000-7ff67372a000 ---p 00003000 00:18 46943486                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_shmem_mmap.so
<br>
7ff67372a000-7ff67372b000 rw-p 00002000 00:18 46943486                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_shmem_mmap.so
<br>
7ff67372b000-7ff673773000 rw-p 00000000 00:00 0 
<br>
7ff67378e000-7ff67378f000 rw-p 00000000 00:00 0 
<br>
7ff67378f000-7ff67384f000 r-xp 00000000 00:18 34069938                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-pal.so.5.0.2
<br>
7ff67384f000-7ff673a4f000 ---p 000c0000 00:18 34069938                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-pal.so.5.0.2
<br>
7ff673a4f000-7ff673a57000 rw-p 000c0000 00:18 34069938                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-pal.so.5.0.2
<br>
7ff673a57000-7ff673a5e000 rw-p 00000000 00:00 0 
<br>
7ff673a5e000-7ff673ac4000 r-xp 00000000 00:18 30269589                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-rte.so.5.0.2
<br>
7ff673ac4000-7ff673cc4000 ---p 00066000 00:18 30269589                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-rte.so.5.0.2
<br>
7ff673cc4000-7ff673cc8000 rw-p 00066000 00:18 30269589                   /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-rte.so.5.0.2
<br>
7ff673cc8000-7ff673cca000 rw-p 00000000 00:00 0 
<br>
7fffbb7d3000-7fffbb7e9000 rw-p 00000000 00:00 0                          [stack]
<br>
7fffbb7ff000-7fffbb800000 r-xp 00000000 00:00 0                          [vdso]
<br>
ffffffffff600000-ffffffffff601000 r-xp 00000000 00:00 0                  [vsyscall]
<br>
[mir13:04104] *** Process received signal ***
<br>
[mir13:04104] Signal: Aborted (6)
<br>
[mir13:04104] Signal code:  (-6)
<br>
[mir13:04104] [ 0] /lib64/libpthread.so.0() [0x3e56c0f4a0]
<br>
[mir13:04104] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3e56432885]
<br>
[mir13:04104] [ 2] /lib64/libc.so.6(abort+0x175) [0x3e56434065]
<br>
[mir13:04104] [ 3] /lib64/libc.so.6() [0x3e5646f7a7]
<br>
[mir13:04104] [ 4] /lib64/libc.so.6(__fortify_fail+0x37) [0x3e564ff3f7]
<br>
[mir13:04104] [ 5] /lib64/libc.so.6() [0x3e564fd2e0]
<br>
[mir13:04104] [ 6] /lib64/libc.so.6() [0x3e564fc9db]
<br>
[mir13:04104] [ 7] /lib64/libc.so.6(__snprintf_chk+0x7a) [0x3e564fc8aa]
<br>
[mir13:04104] [ 8] /usr/lib64/libpmi2.so.0(+0x18ff) [0x7ff671cda8ff]
<br>
[mir13:04104] [ 9] /usr/lib64/libpmi2.so.0(+0x1e5b) [0x7ff671cdae5b]
<br>
[mir13:04104] [10] /usr/lib64/libpmi2.so.0(PMI2_Job_GetId+0x98) [0x7ff671cddc58]
<br>
[mir13:04104] [11] /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_db_pmi.so(+0x177d) [0x7ff671ef477d]
<br>
[mir13:04104] [12] /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-pal.so.5(opal_db_base_select+0xdd) [0x7ff6737eb33d]
<br>
[mir13:04104] [13] /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/openmpi/mca_ess_hnp.so(+0x3266) [0x7ff673123266]
<br>
[mir13:04104] [14] /hpc/home/USERS/joshual/ompi_1.7/openmpi-1.7.3rc1/ompi-1.7_install/lib/libopen-rte.so.5(orte_init+0x17f) [0x7ff673a7251f]
<br>
[mir13:04104] [15] mpirun(orterun+0x6b5) [0x403e25]
<br>
[mir13:04104] [16] mpirun(main+0x20) [0x4035c4]
<br>
[mir13:04104] [17] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3e5641ecdd]
<br>
[mir13:04104] [18] mpirun() [0x4034e9]
<br>
[mir13:04104] *** End of error message ***
<br>
Aborted (core dumped)
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Tuesday, October 01, 2013 7:04 PM
<br>
To: Open MPI Developers List
<br>
Subject: [OMPI devel] 1.7.3rc2 is out
<br>
<p>In the usual place:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
<br>
<p>Please test.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13036.php">Joshua Ladd: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="13034.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13034.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.3rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13038.php">Ralph Castain: "Re: [OMPI devel] 1.7.3rc2 is out"</a>
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
