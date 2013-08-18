<h2>Day 4: Build It Now</h2>
<h3 class="date">August 17, 2013</h3>

<?php img_stretched("gtalumprototypes.png", "Prototypes made at Georgia Tech from aluminum flashing and coffee cans. They melted after a few runs but taught us what we needed to know."); ?>

<p>I have a confession: I have been prototyping designs since Day 1.
</p>
<p>I promised to detail some difficulties with Cylindrical Gasifier design today, but I think it's more important to share the reasoning behind such early prototyping before getting on to the promised topic.</p>

<p>There are so many variables to consider in the design of a stove that it's not really possible to predict on paper what will happen with a particular design.
</p>

<p>Or even on a computer, for that matter.</p>

<p>The equations of fluid mechanics, called the Navier-Stokes equations, describe exactly the behavior of fluids and gases. Unfortunately, even with the world's most powerful computers, engineer's can't solve them except for mostly small problems. Even if it were possible, stove design is further complicated because the difficult-to-calculate gas behavior in a combustion system is coupled to thermodynamic and chemical processes.</p>

<p>But you can solve the Navier-Stokes equations at your desk right now. Pour a glass of water onto the table. The way the water flows is the solution to the equations. This is essentially what you are doing when you are prototyping, setting up a physical experiment and finding out the solution to very complex physical equations. Ideally, you feed these results back into your analysis so that your on-paper design tools improve over time.</p>

<p>My favorite story of backyard prototyping is from Dr. Tom Reed, an MIT Chemical Engineer&mdash;
</p>
<blockquote>
<p>We built and operated a 1 ton/day gasifier at the Solar Energy Research
Institute, spending possibly $6 million for designers, fabricators,
instrumentation engineers and rented space at Hazen Research here in Golden.
Each institutional step could take days or weeks to complete.</p>

<p>While waiting for the institutional wheels to grind, we took matters into our
own hands and built a 5 gallon pail gasifier in the alley behind our laboratory.
It had a blower and a flair, and we learned more about the basic science of
gasification in that zero cost project than we learned from the <span>$</span>6 million
project.</p>
</blockquote>

<p>Prototyping techniques for improved stoves deserves more than just one post. There are experimental techniques to use. Materials to consider. Engineering to leverage. Mindsets to adopt. As this design process goes, I hope to get to share the range of techniques I've learned from university professors, picked up from rural mechanics, and developed on my own.
</p>

<p>Today, here are my notes from the two burn trials I have done so far as illustration of the techniques.
</p>

<p>One closing note, mostly a reminder to myself as I work these coming weeks.</p>

<p>It takes a certain amount of skill to prototype well. But I think the hard part of prototyping has more to do with your ego than anything else. It's a modest exercise to cut some tin cans and set some twigs on fire. It's easier to assume your idea will work than it is to try to tear it apart via experiment. It's easier to spend weeks using a complex fabrication technique or detailed engineering simulation than to put your basic assumptions on the line right away. It's comforting to hide behind a vague demonstration and rationalize the result after-the-fact than it is to state your intentions before doing an experiment.</p> 

<p>You never "become a good designer", you must choose each time you embark on a design exercise to approach your gaps in knowledge with humility and discipline.</p>

<hr>

<h3>Aug 16 Trials</h3>

<p>Primary challenge to rice husk stoves is getting clean, quick lighting. Can a wire mesh cage with central air column achieve quick lighting?
</p>
<p>Will prototype using wood chips first. If wood chips don't light, then rice husk definitely will not. 
</p>
<p>Secondary goal is to observe flame and smoke behavior. A very smokey combustor with wood chips is not acceptable, as it will be worse when switching to rice husk.
</p>

<p>
<img src="<?=route_img("day4/start_1.jpg")?>"></img>
<img src="<?=route_img("day4/start_2.jpg")?>"></img>
<img src="<?=route_img("day4/schem1.png")?>"></img>
</p>

<p>(1) Bottom Lit Wood Chip Cage
</p>
<p>Lights easily. Flame doesn't channel up into the central column. Needs a wind screen.
</p>

<img src="<?=route_img("bottom-lit-test-full.gif")?>"></img>

<p>Ah, the sweet, smokey smell of failure. Fortunately, I had some materials on hand to block the wind that is upsetting this trial.</p>

<p>(2) Top Lit Wood Chip Cage
</p>
<p>Lights easily. Wind screen really helps. Relatively smoke-free, but can be improved.</p> 

<p>Not pictured is further into the run, the wood chips catch fire on the outside of the inner cylinder. Will bring the wind screen in tighter to prevent this from happening.
</p>

<img src="<?=route_img("day4/run2.jpg")?>"></img>
<img src="<?=route_img("day4/schem2.png")?>"></img>

<p>Conclusions:
</p>

<ul>
<li>Lighting is a success</li>
<li>Increase size of central column to try to contain flames</li>
<li>Decrease gap between wind screen and outer mesh to discourage flames on the outside, as these cause the most smoke
</li>
</ul>

<hr>








