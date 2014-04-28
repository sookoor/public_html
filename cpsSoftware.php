<?php
$thisPage="CPS Software";
include("phpincludes/header.php");
?>
<header>
<ul class="meta">
<a href="research.php">Research</a> &#187; Programming and Debugging Cyber-Physical Systems
</ul>
</header>

										
										<section>

  <h3>Overview</h3>
<p>Macro-programming is the task of specifying the global behavior of a distributed system and deriving the behaviors of individual nodes. This is the opposite of specifying local node behaviors and deriving global, emergent behaviors. MacroLab is a macroprogramming framework that offers a vector programming abstraction similar to Matlab for Cyber-Physical Systems (CPSs). The user writes a single macroprogram for an entire CPS. Our framework compiles it down to a set of microprograms that are loaded onto each node. MDB is a macrodebugging system that allows the programmer to debug at the macroprogram level. MDB eliminates the need for a programmer to reason about low-level event traces and message protocols, instead allowing debugging in terms of abstract data types.</p> 

      <h4>Publications</h4>
<ul>

<li>Timothy W. Hnat, Tamim I. Sookoor, Pieter Hooimeijer, Westley Weimer, and Kamin Whitehouse. <a href="docs/hnat10sesena.pdf" onClick="javascript:pageTracker._trackPageview('docs/hnat10sesena.pdf'); ">A Modular and Extensible Macroprogramming Compiler</a>. The 1st Workshop on Software Engineering for Sensor Network Applications (SESENA) in Conjunction with ACM/IEEE International Conference on Software Engineering (ICSE), May 2010 Cape Town, South Africa. (<a href="docs/sookoor13iccpsFinal.pptx" onClick="javascript:pageTracker._trackPageview('docs/sookoor13iccpsFinal.pptx'); ">ppt</a>) </li>

   <br />

<li>Tamim Sookoor, Timothy Hnat, Pieter Hooimeijer, Westley Weimer, and Kamin Whitehouse. <a href="docs/sookoor09macrodebugging.pdf" onClick="javascript:pageTracker._trackPageview('docs/sookoor09macrodebugging.pdf'); ">Macrodebugging: Global Views of Distributed Program Execution</a>. The 7th ACM Conference on Embedded Networked Sensor Systems (SenSys 2009), November 2009, Berkeley, CA. (<a href="http://www.cs.virginia.edu/sookoor/docs/mdb2.ppt" onClick="javascript:pageTracker._trackPageview('docs/mdb2.ppt'); ">ppt</a>)
</li>

<br />

    <li>Timothy W. Hnat, Tamim I. Sookoor, and Kamin Whitehouse. <a href="docs/hnat09mdbdemo.pdf" onClick="javascript:pageTracker._trackPageview('docs/hnat09mdbdemo.pdf'); ">Demo Abstract: Macrodebugging with MDB</a>. The 7th ACM Conference on Embedded Networked Sensor Systems (SenSys 2009), November, 2009, Berkeley, CA.</li>

<br />

  <li>Timothy W. Hnat, Tamim I. Sookoor, Pieter Hooimeijer, Westley Weimer, and Kamin Whitehouse. <a href="docs/sensys08-macrolab.pdf" onClick="javascript:pageTracker._trackPageview('docs/sensys08-macrolab.pdf'); ">MacroLab: A Vector-based Macroprogramming Framework for Cyber-Physical Systems</a>. The 6th ACM Conference on Embedded Networked Sensor Systems (SenSys 2008), November 2008, Raleigh, NC. (<a href="docs/sensys08macrolab.key" onClick="javascript:pageTracker._trackPageview('docs/sensys08macrolab.key'); ">key</a>, <a href="docs/sensys08macrolab.ppt" onClick="javascript:pageTracker._trackPageview('docs/sensys08macrolab.ppt'); ">ppt</a>, <a href="docs/mdb2.ppt" onClick="javascript:pageTracker._trackPageview('docs/mdb2.pdf'); ">pdf</a>)       
</li>

<br />

    <li>Tamim I. Sookoor, Timothy W. Hnat, and Kamin Whitehouse. <a href="docs/sensys08-macrolab-demo.pdf" onClick="javascript:pageTracker._trackPageview('docs/sensys08-macrolab-demo.pdf'); ">Demo Abstract: Programming Cyber-Physical Systems with MacroLab</a>. The 6th ACM Conference on Embedded Networked Sensor Systems (SenSys 2008), November, 2008, Raleigh, NC.</li>
</ul>

<?php virtual("inc/footer.shtml") ?>
