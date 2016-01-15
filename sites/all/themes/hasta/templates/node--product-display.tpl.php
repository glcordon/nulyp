<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
if ($teaser) { ?>
  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print $user_picture; ?>

    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <div class="submitted">
        <?php print $submitted; ?>
      </div>
    <?php endif; ?>

    <div class="content"<?php print $content_attributes; ?>>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>

    <?php print render($content['links']); ?>

    <?php print render($content['comments']); ?>

  </div>
<?php }
else {
  $comments_array = isset($content['comments']['comments']) ? array_filter($content['comments']['comments'], '_count_comments') : array();
  hide($content['body']); hide($content['comments']); hide($content['links']); hide($content['links']['comment']); hide($content['field_description']);
  ?>
  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <section <?php print $content_attributes; ?> class="sec-padding">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <?php print render($content['product:field_images']); ?>
        </div>
        <!--end left-->
        
        <div class="col-md-6 col-sm-12 col-xs-12 bmargin">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h3 class=" raleway"><?php print $title; ?></h3>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <div class="divider-line solid light opacity-6"></div>
          <br/>
          <div class="col-md-8 col-sm-6">
             <?php print render($content['product:commerce_price']); ?>
          </div>
          <div class="col-md-4 col-sm-6 text-right product-review-stars"> 
            <?php print render($content['field_rating']); ?>
            <?php if (count($comments_array)): ?>
              (<?php print t('!reviews_count',  array('!reviews_count' => format_plural(count($comments_array), '1 customer review', '@count customer reviews'))); ?>)
            <?php endif; ?>
          </div>
          <div class="clearfix"></div>
          <br/>
            <?php print render($content['product:field_short_description']); ?>
          <br/>
          <?php
            $content['field_products'][0]['submit']['#attributes']['class'][] = 'less-padding';
            $content['field_products'][0]['submit']['#attributes']['class'][] = 'btn-medium';
            print render($content['field_products']);
          ?>
          <div class="clearfix"></div>
          <br/>
          <br/>
          <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            print render($content);
          ?>
        </div>
        <!--end item--> 
      </div>
    </section>

    <section class="sec-bpadding-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="tabs13">
              <li><a href="#example-13-tab-1" target="_self"><?php print t('Description'); ?></a></li>
              <li><a href="#example-13-tab-2" target="_self"><?php print t('Reviews (@count)', array('@count' => count($comments_array))); ?></a></li>
            </ul>
            <div class="tabs-content13">
              <div id="example-13-tab-1" class="tabs-panel13">
                <?php print render($content['field_description']); ?>
              </div>
              <!-- end tab 1 -->
              
              <div id="example-13-tab-2" class="tabs-panel13">
                <?php print render($content['comments']); ?>
              </div>
              <!-- end tab 2 --> 
              
            </div>
            <!-- end all tabs --> 
          </div>
        </div>
      </div>
    </section>

    <!--end section-->
    <div class="clearfix"></div>

    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
      <div class="clearfix"></div>
    <?php endif; ?>

  </div>
<?php }