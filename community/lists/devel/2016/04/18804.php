<?
$subject_val = "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 11:25:22 2016" -->
<!-- isoreceived="20160421152522" -->
<!-- sent="Thu, 21 Apr 2016 09:25:05 -0600" -->
<!-- isosent="20160421152505" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] seg fault when using yalla, XRC, and yalla" -->
<!-- id="20160421152505.GE28803_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADGp0BSsCRu7jnJQ=xVJaS1v_yknC0YZN3CriG6EC8cW37vWqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] seg fault when using yalla, XRC, and yalla<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-21 11:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18805.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18805.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18805.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The openib btl should be able to run alongside cm/mxm or yalla. If I
<br>
have time this weekend I will get on the mustang and see what the
<br>
problem is. The best answer is to change the openmpi-mca-params.conf in
<br>
the install to have pml = ob1. I have seen little to no benefit with
<br>
using MXM on mustang. In fact, the default configuration (which uses UD)
<br>
gets terrible bandwidth.
<br>
<p>-Nathan
<br>
<p>On Thu, Apr 21, 2016 at 01:48:46PM +0300, Alina Sklarevich wrote:
<br>
<span class="quotelev1">&gt;    David, thanks for the info you provided.
</span><br>
<span class="quotelev1">&gt;    I will try to dig in further to see what might be causing this issue.
</span><br>
<span class="quotelev1">&gt;    In the meantime, maybe Nathan can please comment about the openib btl
</span><br>
<span class="quotelev1">&gt;    behavior here?
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;    Alina.
</span><br>
<span class="quotelev1">&gt;    On Wed, Apr 20, 2016 at 8:01 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hello Alina,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thank you for the information about how the pml components work. I knew
</span><br>
<span class="quotelev1">&gt;      that the other components were being opened and ultimately closed in
</span><br>
<span class="quotelev1">&gt;      favor of yalla, but I didn't realize that initial open would cause a
</span><br>
<span class="quotelev1">&gt;      persistent change in the ompi runtime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Here's the information you requested about the ib network:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      - MOFED version:
</span><br>
<span class="quotelev1">&gt;      We are using the Open Fabrics Software as bundled by RedHat, and my ib
</span><br>
<span class="quotelev1">&gt;      network folks say we're running something close to v1.5.4
</span><br>
<span class="quotelev1">&gt;      - ibv_devinfo:
</span><br>
<span class="quotelev1">&gt;      [dshrader_at_mu0001 examples]$ ibv_devinfo
</span><br>
<span class="quotelev1">&gt;      hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;              transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;              fw_ver:                         2.9.1000
</span><br>
<span class="quotelev1">&gt;              node_guid:                      0025:90ff:ff16:78d8
</span><br>
<span class="quotelev1">&gt;              sys_image_guid:                 0025:90ff:ff16:78db
</span><br>
<span class="quotelev1">&gt;              vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;              vendor_part_id:                 26428
</span><br>
<span class="quotelev1">&gt;              hw_ver:                         0xB0
</span><br>
<span class="quotelev1">&gt;              board_id:                       SM_2121000001000
</span><br>
<span class="quotelev1">&gt;              phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                      port:   1
</span><br>
<span class="quotelev1">&gt;                              state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                              max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                              active_mtu:             4096 (5)
</span><br>
<span class="quotelev1">&gt;                              sm_lid:                 250
</span><br>
<span class="quotelev1">&gt;                              port_lid:               366
</span><br>
<span class="quotelev1">&gt;                              port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                              link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I still get the seg fault when specifying the hca:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;      X,4096,1024:X,12288,512:X,65536,512 -mca btl_openib_if_include mlx4_0
</span><br>
<span class="quotelev1">&gt;      ./hello_c.x
</span><br>
<span class="quotelev1">&gt;      Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev1">&gt;      dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev1">&gt;      v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      mpirun noticed that process rank 0 with PID 10045 on node mu0001 exited
</span><br>
<span class="quotelev1">&gt;      on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I don't know if this helps, but the first time I tried the command I
</span><br>
<span class="quotelev1">&gt;      mistyped the hca name. This got me a warning, but no seg fault:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;      X,4096,1024:X,12288,512:X,65536,512 -mca btl_openib_if_include ml4_0
</span><br>
<span class="quotelev1">&gt;      ./hello_c.x
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      WARNING: One or more nonexistent OpenFabrics devices/ports were
</span><br>
<span class="quotelev1">&gt;      specified:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Host:                 mu0001
</span><br>
<span class="quotelev1">&gt;        MCA parameter:        mca_btl_if_include
</span><br>
<span class="quotelev1">&gt;        Nonexistent entities: ml4_0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      These entities will be ignored.  You can disable this warning by
</span><br>
<span class="quotelev1">&gt;      setting the btl_openib_warn_nonexistent_if MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev1">&gt;      dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev1">&gt;      v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      So, telling the openib btl to use the actual hca didn't get the seg
</span><br>
<span class="quotelev1">&gt;      fault to go away, but giving it a dummy value did.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thanks,
</span><br>
<span class="quotelev1">&gt;      David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On 04/20/2016 08:13 AM, Alina Sklarevich wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hi David,
</span><br>
<span class="quotelev1">&gt;        I was able to reproduce the issue you reported. 
</span><br>
<span class="quotelev1">&gt;        When the command line doesn't specify the components to use, ompi will
</span><br>
<span class="quotelev1">&gt;        try to load/open all the ones available (and close them in the end)
</span><br>
<span class="quotelev1">&gt;        and then choose the components according to their priority and whether
</span><br>
<span class="quotelev1">&gt;        or not they were opened successfully.
</span><br>
<span class="quotelev1">&gt;        This means that even if pml yalla was the one running, other
</span><br>
<span class="quotelev1">&gt;        components were opened and closed as well.
</span><br>
<span class="quotelev1">&gt;        The parameter you are using - btl_openib_receive_queues, doesn't have
</span><br>
<span class="quotelev1">&gt;        an effect on pml yalla. It only affects the openib btl which is used
</span><br>
<span class="quotelev1">&gt;        by pml ob1.
</span><br>
<span class="quotelev1">&gt;        Using the verbosity of btl_base_verbose I see that when the
</span><br>
<span class="quotelev1">&gt;        segmentation fault happens, the code doesn't reach the phase of
</span><br>
<span class="quotelev1">&gt;        unloading the openib btl so perhaps the problem originates there
</span><br>
<span class="quotelev1">&gt;        (since pml yalla was already unloaded).
</span><br>
<span class="quotelev1">&gt;        Can you please try adding this mca parameter to your command line to
</span><br>
<span class="quotelev1">&gt;        specify the HCA you are using?
</span><br>
<span class="quotelev1">&gt;        -mca btl_openib_if_include &lt;hca&gt;
</span><br>
<span class="quotelev1">&gt;        It made the segv go away for me.
</span><br>
<span class="quotelev1">&gt;        Can you please attach the output of ibv_devinfo and write the MOFED
</span><br>
<span class="quotelev1">&gt;        version you are using?
</span><br>
<span class="quotelev1">&gt;        Thank you,
</span><br>
<span class="quotelev1">&gt;        Alina.
</span><br>
<span class="quotelev1">&gt;        On Wed, Apr 20, 2016 at 2:53 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;        wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Hi, David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          We are looking into your report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Josh
</span><br>
<span class="quotelev1">&gt;          On Tue, Apr 19, 2016 at 4:41 PM, David Shrader &lt;dshrader_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I have been investigating using XRC on a cluster with a mellanox
</span><br>
<span class="quotelev1">&gt;            interconnect. I have found that in a certain situation I get a seg
</span><br>
<span class="quotelev1">&gt;            fault. I am using 1.10.2 compiled with gcc 5.3.0, and the simplest
</span><br>
<span class="quotelev1">&gt;            configure line that I have found that still results in the seg
</span><br>
<span class="quotelev1">&gt;            fault is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            $&gt; ./configure --with-hcoll --with-mxm --prefix=...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I do have mxm 3.4.3065 and hcoll 3.3.768 installed in to system
</span><br>
<span class="quotelev1">&gt;            space (/usr/lib64). If I use '--without-hcoll --without-mxm,' the
</span><br>
<span class="quotelev1">&gt;            seg fault does not happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            The seg fault happens even when using examples/hello_c.c, so here
</span><br>
<span class="quotelev1">&gt;            is an example of the seg fault using it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            $&gt; mpicc hello_c.c -o hello_c.x
</span><br>
<span class="quotelev1">&gt;            $&gt; mpirun -n 1 ./hello_c.x
</span><br>
<span class="quotelev1">&gt;            Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev1">&gt;            dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev1">&gt;            v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt;            $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;            X,4096,1024:X,12288,512:X,65536,512
</span><br>
<span class="quotelev1">&gt;            Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev1">&gt;            dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev1">&gt;            v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt;            --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;            mpirun noticed that process rank 0 with PID 22819 on node mu0001
</span><br>
<span class="quotelev1">&gt;            exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;            --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            The seg fault happens no matter the number of ranks. I have tried
</span><br>
<span class="quotelev1">&gt;            the above command with '-mca pml_base_verbose,' and it shows that
</span><br>
<span class="quotelev1">&gt;            I am using the yalla pml:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;            X,4096,1024:X,12288,512:X,65536,512 -mca pml_base_verbose 100
</span><br>
<span class="quotelev1">&gt;            ./hello_c.x
</span><br>
<span class="quotelev1">&gt;            ...output snipped...
</span><br>
<span class="quotelev1">&gt;            [mu0001.localdomain:22825] select: component cm not selected /
</span><br>
<span class="quotelev1">&gt;            finalized
</span><br>
<span class="quotelev1">&gt;            [mu0001.localdomain:22825] select: component ob1 not selected /
</span><br>
<span class="quotelev1">&gt;            finalized
</span><br>
<span class="quotelev1">&gt;            [mu0001.localdomain:22825] select: component yalla selected
</span><br>
<span class="quotelev1">&gt;            ...output snipped...
</span><br>
<span class="quotelev1">&gt;            --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;            mpirun noticed that process rank 0 with PID 22825 on node mu0001
</span><br>
<span class="quotelev1">&gt;            exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;            --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Interestingly enough, if I tell mpirun what pml to use, the seg
</span><br>
<span class="quotelev1">&gt;            fault goes away. The following command does not get the seg fault:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;            X,4096,1024:X,12288,512:X,65536,512 -mca pml yalla ./hello_c.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Passing either ob1 or cm to '-mca pml' also works. So it seems
</span><br>
<span class="quotelev1">&gt;            that the seg fault comes about when the yalla pml is chosen by
</span><br>
<span class="quotelev1">&gt;            default, when mxm/hcoll is involved, and using XRC. I'm not sure
</span><br>
<span class="quotelev1">&gt;            if mxm is to blame, however, as using '-mca pml cm -mca mtl mxm'
</span><br>
<span class="quotelev1">&gt;            with the XRC parameters doesn't throw the seg fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Other information...
</span><br>
<span class="quotelev1">&gt;            OS: RHEL 6.7-based (TOSS)
</span><br>
<span class="quotelev1">&gt;            OpenFabrics: RedHat provided
</span><br>
<span class="quotelev1">&gt;            Kernel: 2.6.32-573.8.1.2chaos.ch5.4.x86_64
</span><br>
<span class="quotelev1">&gt;            Config.log and 'ompi_info --all' are in the tarball ompi.tar.bz2
</span><br>
<span class="quotelev1">&gt;            which is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Is there something else I should be doing with the yalla pml when
</span><br>
<span class="quotelev1">&gt;            using XRC? Regardless, I hope reporting the seg fault is useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Thanks,
</span><br>
<span class="quotelev1">&gt;            David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            --
</span><br>
<span class="quotelev1">&gt;            David Shrader
</span><br>
<span class="quotelev1">&gt;            HPC-ENV High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;            Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;            Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            devel mailing list
</span><br>
<span class="quotelev1">&gt;            devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;            Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;            Link to this post:
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18786.php">http://www.open-mpi.org/community/lists/devel/2016/04/18786.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          devel mailing list
</span><br>
<span class="quotelev1">&gt;          devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;          Link to this post:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18788.php">http://www.open-mpi.org/community/lists/devel/2016/04/18788.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18789.php">http://www.open-mpi.org/community/lists/devel/2016/04/18789.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  David Shrader
</span><br>
<span class="quotelev1">&gt;  HPC-ENV High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;  Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;  Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18793.php">http://www.open-mpi.org/community/lists/devel/2016/04/18793.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18801.php">http://www.open-mpi.org/community/lists/devel/2016/04/18801.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18804/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18805.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18805.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18805.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
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
