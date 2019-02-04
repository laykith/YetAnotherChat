<?php
/*
 * This file is part of Dotfiles.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$rules = [
    '@PSR1' => true,
    '@PSR2' => true,
    'align_multiline_comment' => true,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'backtick_to_shell_exec' => true,
    'binary_operator_spaces' => ['align_double_arrow' => false, 'align_equals' => false],
    'blank_line_after_opening_tag' => true,
    'blank_line_before_return' => true,
    'blank_line_before_statement' => true,
    'cast_spaces' => true,
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'combine_nested_dirname' => true,
    'comment_to_phpdoc' => true,
    'compact_nullable_typehint' => true,
    'concat_space' => ['spacing' => 'none'],
    'declare_equal_normalize' => true,
    'dir_constant' => true,
    'fully_qualified_strict_types' => true,
    'function_to_constant' => true,
    'function_typehint_space' => true,
    'hash_to_slash_comment' => true,
    'implode_call' => true,
    'include' => true,
    'linebreak_after_opening_tag' => true,
    'list_syntax' => ['syntax' => 'short'],
    'logical_operators' => true,
    'lowercase_cast' => true,
    'lowercase_static_reference' => true,
    'magic_constant_casing' => true,
    'magic_method_casing' => true,
    'method_chaining_indentation' => true,
    'multiline_comment_opening_closing' => true,
    'new_with_braces' => true,
    'no_alias_functions' => true,
    'no_binary_string' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_empty_statement' => true,
    'no_extra_consecutive_blank_lines' => ['use'],
    'no_extra_consecutive_blank_lines' => true,
    'no_extra_consecutive_blank_lines' => true,
    'no_homoglyph_names' => true,
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => ['use' => 'echo'],
    'no_multiline_whitespace_before_semicolons' => true,
    'no_null_property_initialization' => true,
    'no_short_bool_cast' => true,
    'no_short_echo_tag' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_superfluous_elseif' => true,
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unneeded_curly_braces' => true,
    'no_unneeded_final_method' => true,
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_whitespace_in_blank_line' => true,
    'object_operator_without_whitespace' => true,
    'ordered_imports' => true,
    'php_unit_construct' => true,
    'php_unit_dedicate_assert' => true,
    'php_unit_method_casing' => true,
    'php_unit_ordered_covers' => true,
    'php_unit_set_up_tear_down_visibility' => true,
    'phpdoc_indent' => true,
    'phpdoc_no_access' => true,
    'phpdoc_no_alias_tag' => ['type' => 'var'],
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_order' => true,
    'phpdoc_return_self_reference' => true,
    'phpdoc_scalar' => true,
    'phpdoc_separation' => true,
    'phpdoc_summary' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_trim' => true,
    'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
    'phpdoc_var_without_name' => true,
    'psr0' => false,
    'psr4' => true,
    'return_assignment' => true,
    'self_accessor' => true,
    'set_type_to_cast' => true,
    'short_scalar_cast' => true,
    'simplified_null_return' => true,
    'single_blank_line_before_namespace' => true,
    'single_line_comment_style' => true,
    'single_quote' => true,
    'space_after_semicolon' => true,
    'standardize_increment' => true,
    'standardize_not_equals' => true,
    'string_line_ending' => true,
    'ternary_operator_spaces' => true,
    'ternary_to_null_coalescing' => true,
    'trailing_comma_in_multiline_array' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
];
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules($rules);
