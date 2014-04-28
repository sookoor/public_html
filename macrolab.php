<?php
   $thisPage="macrolab";
   include("phpincludes/header.php");
   ?>	
<p><a href="research.php">Research</a> &#187; MacroLab</p>

<div id="primarycontainer">
  <h3>MacroLab</h3>
  <div id="primarycontent">
    <div class="post">
      <h4>Overview</h4>
      <div class="contentarea">
	Macro-programming is the task of specifying the global behavior of a distributed system and deriving the behaviors of individual nodes. This is the opposite of specifying local node behaviors and deriving global, emergent behaviors. MacroLab is a macroprogramming framework that offers a vector programming abstraction similar to Matlab for Cyber-Physical Systems (CPSs). The user writes a single macroprogram for an entire CPS. Our framework compiles it down to a set of microprograms that are loaded onto each node. This work is building on our previous experience with Macro-programming systems like <a href="http://www.cs.virginia.edu/~whitehouse/research/marionette/">Marionette</a> and <a href="http://www.cs.virginia.edu/~whitehouse/research/semanticStreams/">Semantic Streams</a>.
      </div>
    <br />
    <h4>Publications</h4>
<div class="contentarea">
Timothy W. Hnat, Tamim I. Sookoor, Pieter Hooimeijer, Westley Weimer, and Kamin Whitehouse, <a href="docs/sensys08-macrolab.pdf" onClick="javascript:pageTracker._trackPageview('docs/sensys08-macrolab.pdf'); ">"MacroLab: A Vector-based Macroprogramming Framework for Cyber-Physical Systems,"</a> in <i>The 6th ACM Conference on Embedded Networked Sensor Systems (SenSys'08)</i>, Raleigh, NC, Nov. 2008.
</div>
<br />
<h4>Demos</h4>
<div class="contentarea">
Tamim I. Sookoor, Timothy W. Hnat, and Kamin Whitehouse, <a href="docs/sensys08-macrolab-demo.pdf" onClick="javascript:pageTracker._trackPageview('docs/sensys08-macrolab-demo.pdf'); "> "MacroLab: Using a Vector Programming Abstraction for Wireless Embedded Networks,"</a> in <i>The 6th ACM Conference on Embedded Networked Sensor Systems (SenSys'08)</i>, Raleigh, NC, Nov. 2008.
</div>
</div>
    <?php virtual("inc/footer.shtml") ?>
    
