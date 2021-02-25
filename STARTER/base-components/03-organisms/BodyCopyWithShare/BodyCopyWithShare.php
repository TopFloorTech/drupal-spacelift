<?php
/**
 * Body Copy
 * @todo schema microdata for article
 */

$title   = "Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod.";
$date    = "JAN 26, 2020";
$wysiwyg = "
<p>
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
</p>
<h2>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</h2>
<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
<h3>H3 Headline Example</h3>
<ul>
    <li>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</li>
    <li>Et harum quidem rerum facilis est et expedita distinctio.</li>
    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </li>
</ul>
<h3>Example of an Ordered List</h3>
<ol>
    <li>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</li>
    <li>Et harum quidem rerum facilis est et expedita distinctio.</li>
    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </li>
</ol>
<p><a href='#' class='button'>Example Button</a></p>

<h3>Example of 2 columns</h3>
<div class='grid-x grid-margin-x large-up-2'>
    <div class='cell'>
   <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
    </p>
    </div>
    <div class='cell'>
    <p>
    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
    </p>
    </div>
</div>
<div>
<img src='assets/images/placeholder-thumbnail.jpg' alt=''>
</div>
"

?>
<article class="BodyCopy bg-light">
    <div class="grid-container">
        <div class="BodyCopy-container">
            <div id="sticky-container" class="grid-x grid-margin-x">
                <div class="cell small-12 large-1 large-text-center">
					<?php include "components/03-organisms/SocialShareTo/SocialShareTo.php" ?>
                </div>
                <div class="cell small-12 large-10">
                    <header class="BodyCopy-header">
                        <h1 class="headline" itemprop="headline"><?= $title ?></h1>
                        <p class="h6 uppercase"><?= $date ?></p>
                    </header>
                    <div class="wysiwyg styled-bullets"><?= $wysiwyg ?></div>
                </div>
            </div>
        </div>
    </div>

</article>