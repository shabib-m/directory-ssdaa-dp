<?php

/**
 * @file
 * Provides the theming functions for fivestar.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Template\Attribute;
use Drupal\Core\Render\Element\RenderElement;

/**
 * Shows a preview of a widget using a custom CSS file.
 */
function theme_fivestar_preview_widget($variables) {
//  $form = [
//    '#post' => [],
//    '#programmed' => FALSE,
//    '#tree' => FALSE,
//    '#parents' => [],
//    '#array_parents' => [],
//    '#required' => FALSE,
//    '#attributes' => [],
//    '#title_display' => 'before',
//  ];
//  $complete_form = [];
//  $form_state = new FormState();
//  $buidler = \Drupal::formBuilder();
//  $form_state->setValues([]);
//  $form_state->setProcessInput(FALSE);
//  $form_state->setCompleteForm($complete_form);
//  $form['vote'] = [
//    '#type' => 'fivestar',
//    '#stars' => 5,
//    '#allow_clear' => TRUE,
//    '#allow_revote' => TRUE,
//    '#allow_ownvote' => TRUE,
//    '#widget' => [
//      'name' => isset($variables['name']) ? $variables['name'] : 'default',
//      'css' => isset($variables['css']) && $variables['css'] != 'default' ? $variables['css'] : FALSE,
//    ],
//  ];
//
//  // Attach necessary JS settings.
//  $settings = [
//    'titleUser' => t('Your rating') . ': ',
//    'titleAverage' => t('Average') . ': ',
//    'feedbackSavingVote' => t('Saving your vote...'),
//    'feedbackVoteSaved' => t('Your vote has been saved.'),
//    'feedbackDeletingVote' => t('Deleting your vote...'),
//    'feedbackVoteDeleted' => t('Your vote has been deleted.'),
//  ];
//  $form['#attached'][] = [
//    'js' => [
//      [
//        'type' => 'setting',
//        'data' => $settings,
//      ],
//    ],
//  ];
//
//  $buidler->doBuildForm('fivestar_preview', $form, $form_state);
//  $output = $form;
//  $output['#prefix'] = '<div class="fivestar-star-preview fivestar-' . $form['vote']['#widget']['name'] . '">';
//  $output['#suffix'] = '</div>';
//
//  return \Drupal::service('renderer')->render($output);
}

/**
 *
 */
function theme_fivestar_preview($variables) {
  extract($variables, EXTR_SKIP);
  $values = [
    'vote_average' => 50,
    'vote_user' => 80,
    'vote_count' => 20,
  ];
  $settings = [
    'stars' => $stars,
    'allow_clear' => $unvote,
    'allow_revote' => $revote,
    'allow_ownvote' => $ownvote,
    'style' => $style,
    'text' => $text,
    'title' => $title,
    'autosubmit' => FALSE,
    'vote_type' => 'vote',
  ];

  $form = drupal_get_form('fivestar_custom_widget', $values, $settings);
  $form = \Drupal::service('renderer')->render($form);
  // This regex is sadly necessary because having duplicate form_tokens or
  // form_id elements can cause the content type form to choke. Forms inside of
  // forms is also frowned upon, so this removes the wrapping form tag as well.
  $form = str_replace(['<form', '</form>'], [
    '<div',
    '</div>',
  ], $form);
  $form = preg_replace('/( method=".*?")|( action=".*?")|(<input.*?name="(form_token|form_id|destination|form_build_id)".*?\/>)/', '', $form);
  return $form;
}

/**
 *
 */
function theme_fivestar_preview_wrapper($variables) {
  return '<div class="fivestar-preview fivestar-preview-' . $variables['type'] . '">' . $variables['content'] . '</div>';
}

/**
 * Theme function for 'default' fivestar field formatter.
 *
 * This themes static stars. That is, pairs of stars where neither set
 * of stars is "exposed". Exposed stars are clickable and displayed in a
 * form. Theming of exposed stars is handled by the form array (and calls
 * the same theme functions called at the end of this function).
 */
function theme_fivestar_formatter_default($variables) {
  $element = $variables['element'];
  if (empty($element['#instance_settings']['stars'])) {
    $element['#instance_settings']['stars'] = 5;
  }

  // Add CSS and JS.
  $path = drupal_get_path('module', 'fivestar');
  drupal_add_js($path . '/js/fivestar.js');
  drupal_add_css($path . '/css/fivestar.css');

  $variables = [
    'rating' => $element['#rating'],
    'stars' => $element['#instance_settings']['stars'],
    'widget' => $element['#widget'],
  ];

  $star_display = theme('fivestar_static', $variables);
  return theme('fivestar_static_element', [
    'description' => $element['#description'],
    'star_display' => $star_display,
    'is_form' => FALSE,
  ]);
}

/**
 * Themes the fivestar form element by adding necessary css and javascript.
 */
function theme_fivestar($variables) {
  $element = $variables['element'];

  return theme('form_element', ['element' => $element]);
}

/**
 * Themes the straight HTML version of the fivestar select list. This is used
 * to remove the wrapping 'form-item' div from the select list.
 */
function theme_fivestar_select($variables) {
  $element = $variables['element'];
  unset($element['#theme']);
  return \Drupal::service('renderer')->render($element);
  Element::setAttributes($element, ['id', 'name', 'size']);
  RenderElement::setAttributes($element, ['form-select']);
  $variables['#attributes'] = $element['#attributes'];
  $variables['#options'] = form_select_options($element);
  $variables['#theme'] = 'select';
}

/**
 * Displays a plain HTML view-only version of the widget with a specified rating.
 *
 * @param float $rating
 *   The desired rating to display out of 100 (i.e. 80 is 4 out of 5 stars).
 * @param int $stars
 *   The total number of stars this rating is out of.
 * @param string $tag
 *   Allows multiple ratings per node.
 *
 * @return string
 *   A themed HTML string representing the star widget.
 */
function theme_fivestar_static($variables) {
  $rating = $variables['rating'];
  $stars = $variables['stars'];
  $vote_type = $variables['vote_type'];
  $widget = $variables['widget'];
  //  if ($widget['name'] != 'default') {
  //    $path = drupal_get_path('module', 'fivestar');
  //    drupal_add_css($path . '/css/fivestar.css');
  //    drupal_add_css($widget['css']);
  //  }

  $output = '<div class="fivestar-' . $widget['name'] . '">';
  $output .= '<div class="fivestar-widget-static fivestar-widget-static-' . $vote_type . ' fivestar-widget-static-' . $stars . ' clearfix">';

  if (empty($stars)) {
    $stars = 5;
  }

  $numeric_rating = $rating / (100 / $stars);
  for ($n = 1; $n <= $stars; $n++) {
    $star_value = ceil((100 / $stars) * $n);
    $prev_star_value = ceil((100 / $stars) * ($n - 1));
    $zebra = ($n % 2 == 0) ? 'even' : 'odd';
    $first = $n == 1 ? ' star-first' : '';
    $last = $n == $stars ? ' star-last' : '';
    $output .= '<div class="star star-' . $n . ' star-' . $zebra . $first . $last . '">';
    if ($rating < $star_value && $rating > $prev_star_value) {
      $percent = (($rating - $prev_star_value) / ($star_value - $prev_star_value)) * 100;
      $output .= '<span class="on" style="width: ' . $percent . '%">';
    }
    elseif ($rating >= $star_value) {
      $output .= '<span class="on">';
    }
    else {
      $output .= '<span class="off">';
    }
    if ($n == 1) {
      $output .= $numeric_rating;
    }
    $output .= '</span></div>';
  }
  $output .= '</div></div>';

  return $output;
}

/**
 * Displays the text associated with a static star display.
 *
 * Note that passing in explicit data types is extremely important when using
 * this function. A NULL value will exclude the value entirely from display,
 * while a 0 value indicates that the text should be shown but it has no value
 * yet.
 *
 * All ratings are from 0 to 100.
 *
 * @param float $user_rating
 *   The current user's rating.
 * @param float $average
 *   The average rating.
 * @param int $votes
 *   The total number of votes.
 * @param int $stars
 *   The number of stars being displayed.
 *
 * @return string
 *   A themed HTML string representing the star widget.
 */
function theme_fivestar_summary($variables) {
  $microdata = $variables['microdata'];
  extract($variables, EXTR_SKIP);
  $output = '';
  $div_class = '';
  $average_rating_microdata = '';
  $rating_count_microdata = '';
  if (isset($user_rating)) {
    $div_class = isset($votes) ? 'user-count' : 'user';
    $user_stars = round(($user_rating * $stars) / 100, 1);
    $output .= '<span class="user-rating">' . t('Your rating: <span>!stars</span>', ['!stars' => $user_rating ? $user_stars : t('None')]) . '</span>';
  }
  if (isset($user_rating) && isset($average_rating)) {
    $output .= ' ';
  }
  if (isset($average_rating)) {
    if (isset($user_rating)) {
      $div_class = 'combo';
    }
    else {
      $div_class = isset($votes) ? 'average-count' : 'average';
    }

    $average_stars = round(($average_rating * $stars) / 100, 1);
    if (!empty($microdata['average_rating']['#attributes'])) {
      $average_rating_microdata = ($microdata['average_rating']['#attributes']);
    }
    $output .= '<span class="average-rating">';
    $output .= t("Average: <span {$average_rating_microdata}>@stars</span>", [
      '@stars' => $average_stars,
    ]);
    $output .= '</span>';
  }

  if (isset($votes)) {
    if (!isset($user_rating) && !isset($average_rating)) {
      $div_class = 'count';
    }
    if ($votes === 0) {
      $output = '<span class="empty">' . t('No votes yet') . '</span>';
    }
    else {
      if (!empty($microdata['rating_count']['#attributes'])) {
        $rating_count_microdata = new Attribute($microdata['rating_count']['#attributes']);
      }
      // We don't directly substitute $votes (i.e. use '@count') in
      // formatPlural() because it has a span around it which is not
      // translatable.
      $votes_str = \Drupal::translation()->formatPlural($votes, '<span ' . $rating_count_microdata . '>@cnt</span> vote', '@cnt votes', [
        '@cnt' => intval($votes),
      ]);
      if (isset($user_rating) || isset($average_rating)) {
        $output .= ' <span class="total-votes">(' . $votes_str . ')</span>';
      }
      else {
        $output .= ' <span class="total-votes">' . $votes_str . '</span>';
      }
    }
  }

  $output = '<div class="fivestar-summary fivestar-summary-' . $div_class . '">' . $output . '</div>';
  return $output;
}

/**
 * Displays a static fivestar value as stars with a title and description.
 */
function theme_fivestar_static_element($variables) {
  $output = '<div class="fivestar-static-form-item">';
  if (isset($variables['is_form']) && !$variables['is_form']) {
    $output = '<div class="fivestar-static-item">';
  }

  $element_data = [
    '#type' => 'item',
    '#title' => $variables['title'],
    '#description' => $variables['description'],
    '#description_display' => 'after',
    '#children' => $variables['star_display'],
  ];

  $output .= \Drupal::service('renderer')->render($element_data);
  $output .= '</div>';

  return $output;
}
