<?php
entry_start(3);
?>

<p>Yesterday, I noted that focusing on only boiling water simplifies the design of a rice husk cook stove. Here is the argument to back up the statement.</p>

<p>Though there are other classes of rice husk cook stove, we will focus on the simplest design, the Cylindrical Gasifier.</p>

<p>You fill the Cylindrical Gasifier with a batch of rice husk, light it up from the top, then let it burn till it runs out.</p>

<p>The fuel is consumed from the top down. The stove design community has come to term this "Top Lit UpDraft Gasification" (TLUD). The history of TLUDs is quite interesting, supposedly arising from soldiers designing low-smoke fires to hide their location as they snuck through dense woods. These days, <a href="http://www.drtlud.com">Doc TLUD</a> promotes their design and development world wide.</p>

<p>As you increase the diameter of the stove, more fuel is used up for a give time. That means more energy is released. The power of the device is correspondingly higher. The energy released is directly proportional to the area of the cross-section of the stove. Therefore, it is proportional to the square of the diameter.</p>

<p class="centered">
$Power \propto Area \propto Diameter ^ 2$
</p>

<p>Remember, the fuel is consumed top down. The fire that was started at the top of the stove migrates down the length of the reactor over time. For now, we can assume the rate at which it does this is fixed. </p>

<p>Therefore, if you make the stove taller, it will run longer without requiring a re-fuel. You call the amount of time without a refuel the "batch time".</p>

<p>Summarizing, a wider stove is more powerful, and a taller stove runs longer. Now, let's think about cooking.</p>

<p>When you cook something, you can't just turn your stove up as high as you like. You will burn the food. The power required is a fixed quantity. Therefore, the diameter of the Cylindrical Gasifier that you would need is also fixed.</p>

<p>This is not the case when you consider boiling water. You can't burn water.</p>

<p>When boiling water, you can make the stove as big in diameter as you like. Higher power will just raise the temperature of the water faster.</p>

<p>This is interesting because then you can decrease the height of the stove. The schematic below compares actual sizes of Cylindrical Gasifiers.</p>

<p class="centered">
<img src="<?=route_img("heightschematic.png")?>"></img>
</p>

<p>Gasifier (1) is sized for cooking. Notice how unbalanced this would be. Imagine putting a big tea kettle full of water on top. It would easily tip. You couldn't put this device on your counter-top, it would have to sit on the ground. Cultures that prefer cooking sitting down wouldn't be interested in this device.</p>

<p>Gasifier (2) provides the same amount of energy as Gasifier (1) because it has the same volume. However, it would be quite difficult to tip over. Gasifier (2) also requires less material.</p>

<p>
$$Volume = {\pi D ^ 2 H \over 4 }$$
</p>
<p>
$$Area_{surface}= \pi D H$$
</p>
<p>
$$Area_{surface} = {4 \pi ^ 2 V \over D} $$
</p>

<p class="centered">(want to maximize D to minimize surface area, which is the amount of material used)</p>

<p>Finally, the boiling time of Gasifier (2) is lower. It has a higher power, meaning it transfers more energy per unit time. It won't run as long as Gasifier (1), but it will accomplish the same thing.</p>

<p>Switching from all-purpose cooking to exclusively boiling water opened the design space right from the start. Already we see possibility for a reduction in cost, improvement in stability, and improved convenience. </p>

<p>Sounds perfect, right? Tomorrow I'll explain why things aren't quite this easy.</p>

<h3>Image attributions</h3>
<p><a href="http://www.rolexawards.com/press/photos/2008/belonio/">Rolex Awards for Enterprise</a></p>
<p><a href="http://xkcd.com/">xkcd</a></p>


















