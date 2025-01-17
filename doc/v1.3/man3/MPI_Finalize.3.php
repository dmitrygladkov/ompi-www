<?php
$topdir = "../../..";
$title = "MPI_Finalize(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Finalize</B>  - Terminates MPI execution environment.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Finalize()

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_FINALIZE(<I>IERROR</I>)
            INTEGER   <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Finalize()

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  routine cleans up all MPI states. Once this routine is called, no
       MPI routine (not even <a href="../man3/MPI_Init.3.php">MPI_Init</a>) may be called, except for  MPI_Get_ver-
       sion,  <a href="../man3/MPI_Initialized.3.php">MPI_Initialized</a>, and <a href="../man3/MPI_Finalized.3.php">MPI_Finalized</a>. Unless there has been a call
       to <a href="../man3/MPI_Abort.3.php">MPI_Abort</a>, you must ensure that all pending communications involving
       a  process  are  complete before the process calls MPI_Finalize. If the
       call returns, each process may either continue  local  computations  or
       exit  without  participating  in  further communication with other pro-
       cesses. At the moment when the last  process  calls  MPI_Finalize,  all
       pending  sends  must  be matched by a receive, and all pending receives
       must be matched by a send.

       MPI_Finalize is collective over all connected  processes.  If  no  pro-
       cesses were spawned, accepted, or connected, then this means it is col-
       lective over MPI_COMM_WORLD. Otherwise, it is collective over the union
       of all processes that have been and continue to be connected.

</PRE>
<H2>NOTES</H2><PRE>
       All processes must call this routine before exiting. All processes will
       still exist but may not make any further MPI calls. MPI_Finalize  guar-
       antees  that  all local actions required by communications the user has
       completed will, in fact, occur before it returns. However, MPI_Finalize
       guarantees nothing about pending communications that have <I>not</I> been com-
       pleted;  completion  is  ensured  only  by   <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>,   <a href="../man3/MPI_Test.3.php">MPI_Test</a>,   or
       <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a> combined with some other verification of completion.

       For  example,  a successful return from a blocking communication opera-
       tion or from <a href="../man3/MPI_Wait.3.php">MPI_Wait</a> or <a href="../man3/MPI_Test.3.php">MPI_Test</a> means that the communication is  com-
       pleted by the user and the buffer can be reused, but does not guarantee
       that the local process has no more work to do. Similarly, a  successful
       return  from  <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>  with  a  request handle generated by an
       <a href="../man3/MPI_Isend.3.php">MPI_Isend</a> nullifies the handle but does not guarantee that  the  opera-
       arbitrary  order. If no key has been attached to MPI_COMM_SELF, then no
       callback is invoked. This freeing of MPI_COMM_SELF happens  before  any
       other parts of MPI are affected. Calling <a href="../man3/MPI_Finalized.3.php">MPI_Finalized</a> will thus return
       "false" in any of these callback functions. Once  you  have  done  this
       with MPI_COMM_SELF, the results of MPI_Finalize are not specified.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009                  <B>MPI_Finalize(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
