<?php entry_start(6); ?>

<p>On <a href="day3">Day 3</a>, I mentioned that reducing the size of a stove led to unexpected problems. Above is what we observed when we tried it in Cambodia, not knowing what would happen.</p>

<p>The flames from the stove with the increased diameter (200 mm) were significantly taller than from the original 150 mm stove. The difference is not pronounced in the pictures because of the difference in the angle between the pictures, but it is very obvious in person. The 200 mm stove flames are at least double the height of the 150 mm flames.</p>

<p>We want the flames to be short because, generally, it reduces pollutants. Also, it is useful to have a short flame because it makes the stove safer and more convenient for cooks.</p>

<p>The trend of increased flame height continues as you scale the diameter further.</p>

<p>A friend of mine built a Cylindrical Gasifier out of a 55 gallon drum, that produced a flame more than a meter tall. She had to retreat from the barrel because of the intense heat.</p>

<p>Interestingly, even if you play around with the hole pattern on the burner, the flame shape doesn't change significantly. It is still much taller for the larger diameter gasifiers. You can make the burner completely open, and you will still see it happening.</p>

<p>What is at the root of this difference in flame shape?</p>

<p>The gas coming out of the stove burns when it is mixed with oxygen from the surrounding air.</p>

<p>Combustion, like any chemical reaction, does not occur instantaneously. There is some maximum rate at which something can burn. This is quantified as the flame speed of the gas.</p>

<p>If there is more gas to burn, it will require more time, making your flame taller.</p>

<p>Combustion only occurs in the Cylindrical Gasifier when the gas from the reactor and the outside air mix together. This mixing only occurs where the air and gas touch. The gas and air touch approximately along a cylindrical surface.</p>

<p>The height of the flame, then, depends on two things.</p>

<p>(1) The volume of gas leaving the reactor for a given time period</p>
<p>(2) The area available for chemical reaction</p>

<p>Here's a diagram to illustrate what I've outlined so far.</p>

<img src="<?=route_img("day6diagram.png")?>"></img>

<p>The value of (1), the volume of gas, increases as a function of $D^2$ because the volume of gas produced is proportional to the cross-sectional area of the gasifier.</p>

<p>The value of (2), the contact surface area, increases as a function of $D$. The reaction zone is proportional to the perimeter of this sort of burner.</p>

<p>Therefore, as you increase the diameter of the stove, the volume of gas produced increases faster than the corresponding surface area on which to burn it. The flame gets taller because it takes longer to burn up this additional gas.</p>

<p>As you can see, the geometry in all three dimensions is important in understanding the behavior of the burner. You have to realize that as you increase the diameter of the design, you increase the <em>volume</em> of gas produced but only increase the <em>area</em> available to burn it.</p>

<p>Flames are three dimensional. Awesome.</p>

<p>So, what are some possible solutions to the problem of increasing flame height? How do we increase the size of the Cylindrical Gasifier without compromising on an unsafe, dirty flame? We'll come back to these questions before the 30 days are up.</p>


<div class="nextprev"><a class="next" href="day6">&rarr; Next: Coming Soon</a><a class="prev" href="day5">&larr; Previous: Rest, Says William James</a></div>

<h3>Image Attributions</h3>

<p><a href="www.bioenergylists.org">Bioenergy Lists</a></p>

<hr>

<p>The <span class="good-boiler-logo">Good Boiler</span> design log is a real time document about things I find interesting as I undertake a real-life design project. I want it to be useful to others. So, please share, copy, and steal parts of it. Send me your feedback about the notes. Get in touch at <a href="mailto:marc@smallredtile.com">marc@smallredtile.com</a>.</p>









