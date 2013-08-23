<?php
entry_start(9);
?>

<p>How much water can you boil with a given amount of rice husk?</p>

<p>This quantity is critical when designing an actual device. If the amount of fuel is too large, it will be impractical to use in a household.</p>

<p>Also, knowing your target amount of water to boil helps you debug combustion. If you're not reaching the calculated performance, then you've got something lowering your heat transfer efficiency.</p>

<p>To calculate the amount of water we can boil we need the following things</p>

<ol>
<li>How much energy is released by rice husk</li>
<li>How much energy it takes to boil water</li>
<li>The percentage of energy released by the rice husk to the amount absorbed by the water</li>
</ol>

<p>Let's break each down.</p>

<h3>(1) How much energy is released by rice husk</h3>

<p>The energy contained in rice husk is quantified as the energy density. Here is a typical value:</p>


<table class="pure-table">
  <tr>
    <td>Energy Density</td>
    <td>3,000</td>
    <td>kcal/kg</td>
  </tr>
</table>

<p>We don't get all of that energy when we burn rice husk in a typical stove. Some percentage of it is left in the char residue.</p>

<p>If we estimate the percentage of char left over as 30% of the mass of original rice husk, we can use the energy density of the char to calculate the Adjusted Energy Density, which gives us the actual amount of energy released.</p>

<table class="pure-table">
  <tr>
    <td>Energy Density Char</td>
    <td>3,283<?=footnote_link(1, "jetter")?></td>
    <td>$kcal/kg$</td>
  </tr>
  <tr>
    <td>Conversion Percentage</td>
    <td>70%</td>
    <td>-</td>
  </tr>
  <tr>
    <td>Adjusted Energy Density</td>
    <td>2,015.1</td>
    <td>$kcal/kg$</td>
  </tr>
</table>


<p>When designing a stove, we need the volume of fuel to choose the right dimensions. To get volume from mass, we use bulk density. For rice husk compacted in a fashion similar to a stove this is&mdash;
</p>

<table class="pure-table">
  <tr>
    <td>Bulk Density</td>
    <td>109.1 <?=footnote_link(2, "irri")?></td>
    <td>$kg/m^3$</td>
  </tr>
</table>

<p>All together, we now have the amount of energy contained per unit volume of rice husk.</p>

<table class="pure-table">
  <tr>
    <td>Energy Density</td>
    <td>219,847</td>
    <td>$kcal/m^3$</td>
  </tr>
</table>

<h3>(2) How much energy it takes to boil water</h3>

<p>There are lots of other places online that explain step-by-step the physics behind calculating the energy required for boiling water. <a href="https://www.khanacademy.org/science/chemistry/states-of-matter/v/specific-heat--heat-of-fusion-and-vaporization">Here</a> is a nice video from Khan Academy on the topic.</p>

<p>The key quantity is heat capacity, the amount of energy required to change the temperature of 1 kg of water by 1 degree Celsius.</p>

<p>The interesting thing about the heat capacity of water is it is used to define the units of energy. A kcal is defined as the amount of energy required to raise the temperature of water 1 degree C. So, the specific heat of water is 1 kcal/kg-C.</p>

<table class="pure-table">
  <tr>
    <td>Specific Heat Water</td>
    <td>$c_p$</td>
    <td>1</td>
    <td>${kcal \over kg \cdot C}$</td>
  </tr>
</table>

<p>The density of water is similarly interesting. A kg is defined as the mass of 1 cm^3 of water at 4 degree C. So, the density is</p>

<table class="pure-table">
  <tr>
    <td>Density</td>
    <td>$\rho$</td>
    <td>1,000</td>
    <td>$kg/m^3$</td>
  </tr>
</table>

<p>This is all the information we need to calculate the amount of energy to raise a certain volume of water to boiling from 24 C.
</p>

<table class="pure-table">
<tr>
  <td>
Energy Density = $c_p \cdot \rho \cdot dT = 76$ kcal/L
  </td>
</tr>
</table>

<h3>(3) The percentage of energy released by the rice husk to the amount absorbed by the water</h3>

<p>The transfer of energy from the combustion of rice husk to the heating of water is not perfect. </p>

<p>A big part of the energy is lost as hot air exiting the stove system.</p>

<p>The ratio of energy released to energy absorbed is called efficiency. Jim Jetter, in a 2010 EPA paper calls it "Overall Thermal Efficiency". The results for a bunch of stove tests show ranges of OTE between 10% and 55%.</p>

<p>
  <img src="<?=route_img("day9/ote.png")?>"></img>
</p>

<p>In other words, somewhere between 10% and 55% of the energy released by the fuel will be used to heat the water.</p>

<h3>Summary</h3>

<p>Eventually, I will combine this information into some design tables for rice husk stoves. For now, I will do a simpler calculation to see what dimensions of fuel we could need to boil 0.5 L of water (about 2 cups).</p>

<p>To boil 475 mL of water from 24 C, you need 36.1 kcal of energy.</p>

<p>
  For a given efficiency, $\eta$, the energy of the fuel required is $36.1 / \eta$ kcal.
</p>

<p>
  Using our adjusted energy density of 201,847 kcal/m^3, we can find the required volume of rice husk.
</p>

<p>
  $Volume = {36.1 kcal \over \eta \cdot 201847 kcal / m^3 }$
</p>

<p>Using this equation, we find the following results for different efficiencies. We will use a diameter for the fuel chamber of 10 cm.</p>

<table class="pure-table">
  <tr>
    <th>Efficiency</th>
    <th>Volume [m^3]</th>
    <th>Height [cm]
  </tr>
  <tr>
    <td>0.1</td>
    <td>1642048</td>
    <td>21</td>
  </tr>
  <tr>
    <td>0.3</td>
    <td>547349</td>
    <td>7</td>
  </tr>
  <tr>
    <td>0.5</td>
    <td>328409</td>
    <td>4 (!)</td>
  </tr>
</table>

<p>
  At 50% efficiency, the fuel chamber would only need to be 10 cm in diameter and 4 cm tall. Tiny! Perhaps we could reduce the diameter and make the device even more portable.
</p>

<p>
  Even the 10 cm diameter and 7 cm height is a convenient size to boil 2 cups of water for morning coffee.
</p>

<p>I was surprised a useful amount of work could be done by something so small. I was also skeptical that it would work. So, I built a prototype and ran it.</p>

<?= img_stretched("day9/sidebyside.png") ?>
<?= img_stretched("day8/hockey.jpg") ?>

<img src="<?=route_img("day8/run3.gif")?>">

<p>No smoke. 5 minutes of run time. 100% rice husk consumption.</p>

<p>The flame was steady in the center column over the entire run.</p>

<p>There are still some important questions to work through, such as what Overall Thermal Efficiency we will achieve with this device. However, these encouraging results are enough to condense into a design concept, which I will present tomorrow.</p>

<h3>Image Attributions</h3>

<p><a href="http://en.wikipedia.org/wiki/Kilogram">Wikimedia</a></p>

<h3>References</h3>

<p class="footnote"><a name="jetter"> ①</a> Jetter, J, et. al. Pollutant Emissions and Energy Efficiency under Controlled Conditions for Household Biomass Cookstoves and Implications for Metrics Useful in Setting International Test Standards. US Environmental Protection Agency. 2010.</p>
<p class="footnote"><a name="irri"> ②</a> http://www.knowledgebank.irri.org/rkb/index.php/rice-milling/byproducts-and-their-utilization/rice-husk</p>









