<?php
$topdir = "../../..";
$title = "MPI_Type_create_hindexed(3) man page (version 1.6.4)";
$meta_desc = "Open MPI v1.6.4 man page: MPI_TYPE_CREATE_HINDEXED(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_create_hindexed</b> - Creates an indexed data type with offsets
in bytes.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_create_hindexed(int count, int array_of_blocklengths[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Aint array_of_displacements[], MPI_Datatype oldtype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype *newtype)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax (see FORTRAN 77 NOTES)</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_CREATE_HINDEXED(COUNT, ARRAY_OF_BLOCKLENGTHS,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_DISPLACEMENTS, OLDTYPE, NEWTYPE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, ARRAY_OF_BLOCKLENGTHS(*), OLDTYPE, NEWTYPE, IERROR
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND) ARRAY_OF_DISPLACEMENTS(*)
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
MPI::Datatype MPI::Datatype::Create_hindexed(int count,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_blocklengths[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI::Aint array_of_displacements[]) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>count </dt>
<dd>Number of blocks (nonnegative integer). </dd>

<dt>array_of_blocklengths
</dt>
<dd>Number of elements in each block (array of nonnegative integers). </dd>

<dt>array_of_displacements
</dt>
<dd>Byte displacement of each block (array of integers). </dd>

<dt>oldtype </dt>
<dd>Old data type
(handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newtype </dt>
<dd>New data type (handle).  </dd>

<dt>IERROR </dt>
<dd>Fortran
only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Type_create_hindexed is identical
to <a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a>, except that block displacements in <i>array_of_displacements</i>
are specified in bytes, rather than in multiples of the <i>oldtype</i> extent.
 <p>
Assume that <i>oldtype</i> has type map <p>
<br>
<pre>    {(type(0), disp(0)), ..., (type(n-1), disp(n-1))},
</pre><p>
with extent <i>ex</i>. Let B be the <i>array_of_blocklengths</i> argument and D be the
<i>array_of_displacements</i> argument. The newly created data type has  <br>
<pre>n x S^count-1
    (i=0)        B[i]  entries:
  {(type(0), disp(0) + D[0]),...,(type(n-1), disp(n-1) + D[0]),...,
  (type(0), disp(0) + (D[0] + B[0]-1)* ex),...,
  type(n-1), disp(n-1) + (D[0]+ B[0]-1)* ex),...,
  (type(0), disp(0) + D[count-1]),...,(type(n-1), disp(n-1) + D[count-1]),...,
  (type(0), disp(0) +  D[count-1] + (B[count-1] -1)* ex),...,
  (type(n-1), disp(n-1) + D[count-1] + (B[count-1] -1)* ex)}
</pre><p>
NOTE - This routine replaces <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>, which is deprecated. See
the man page <i><a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a>(3)</i> for information about that routine.
<p>
<h2><a name='sect8' href='#toc8'>Fortran
77 Notes</a></h2>
The MPI standard prescribes portable Fortran syntax for the <i>ARRAY_OF_DISPLACEMENTS</i>(*)
argument only for Fortran 90.  FORTRAN 77 users may use the non-portable
syntax <p>
<br>
<pre>     INTEGER*MPI_ADDRESS_KIND ARRAY_OF_DISPLACEMENTS(*)
</pre><p>
where MPI_ADDRESS_KIND is a constant defined in mpif.h and gives the length
of the declared integer in bytes.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI:Exception object. <p>
Before
the error value is returned, the current MPI error handler is called. By
default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.   <p>
See the <i>MPI(3)</i> man page for a full list of MPI
error codes.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a> <br>
<a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a> <br>

<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax (see FORTRAN 77 NOTES)</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Fortran 77 Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");