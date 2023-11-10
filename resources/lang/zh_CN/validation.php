<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => '数组中缺少"where"条目',
    'missing_update'                 => '数组中缺少 "update"条目',
    'invalid_where_key'              => 'JSON包含一个无效的"where"子句',
    'invalid_update_key'             => 'JSON包含一个无效的"update"子句',
    'invalid_query_data'             => '查询中的%s:%s字段存在无效数据',
    'invalid_query_account_type'     => '查询包含不同类型的账户，这是不允许的',
    'invalid_query_currency'         => '查询包含不同货币的账户，这是不不允许的。',
    'iban'                           => '此 IBAN 无效',
    'zero_or_more'                   => '此值不能为负',
    'no_asset_account'               => 'This is not an asset account.',
    'date_or_time'                   => '此值必须是有效的日期或时间 (ISO 8601)',
    'source_equals_destination'      => '来源账户与目标账户相同',
    'unique_account_number_for_user' => '此账户号码已在使用中',
    'unique_iban_for_user'           => '此 IBAN 已在使用中',
    'reconciled_forbidden_field'     => '这笔交易已经对账，您无法更改“:field”',
    'deleted_user'                   => '由于安全限制，您无法使用此电子邮件地址注册',
    'rule_trigger_value'             => '此值不能用于所选触发条件',
    'rule_action_value'              => '此值不能用于所选动作',
    'file_already_attached'          => '上传的文件“:name”已添加到此对象',
    'file_attached'                  => '成功上传文件“:name”',
    'must_exist'                     => '数据库中不存在字段 :attribute 的 ID',
    'all_accounts_equal'             => '此字段中的所有账户必须相同',
    'group_title_mandatory'          => '在有超过一笔交易时，组标题为必填项',
    'transaction_types_equal'        => '所有拆分的类型必须相同',
    'invalid_transaction_type'       => '无效的交易类型',
    'invalid_selection'              => '您的选择无效',
    'belongs_user'                   => '此值关联至一个似乎不存在的对象。',
    'belongs_user_or_user_group'     => '此值关联至当前财务管理中一个似乎不存在的对象。',
    'at_least_one_transaction'       => '至少需要一笔交易',
    'recurring_transaction_id'       => '至少需要一笔交易。',
    'need_id_to_match'               => '您需要提交一个含有ID的条目，API才能匹配。',
    'too_many_unmatched'             => '已提交的多个交易无法与其各自的数据库条目相匹配。请确保现有条目具有有效的ID。',
    'id_does_not_match'              => '提交的ID与预期的ID不符，请确保匹配或省略该字段。',
    'at_least_one_repetition'        => '至少需要一次重复',
    'require_repeat_until'           => '仅需填写重复次数或结束日期 (repeat_until) 即可，不需两者全部填写',
    'require_currency_info'          => '此字段需要货币信息',
    'not_transfer_account'           => '此账户无法用于转账',
    'require_currency_amount'        => '此字段需要外币信息',
    'require_foreign_currency'       => '此字段要求为数字',
    'require_foreign_dest'           => '此字段值必须与目标账户的货币相匹配',
    'require_foreign_src'            => '此字段值必须与来源账户的货币相匹配',
    'equal_description'              => '交易描述和全局描述不应相同',
    'file_invalid_mime'              => '文件“:name”的类型为“:mime”，系统禁止上传此类型的文件',
    'file_too_large'                 => '文件“:name”过大',
    'belongs_to_user'                => ':attribute 的值未知',
    'accepted'                       => ':attribute 必须接受',
    'bic'                            => '此 BIC 无效',
    'at_least_one_trigger'           => '每条规则必须至少有一个触发条件',
    'at_least_one_active_trigger'    => '规则必须至少有一个启用的触发条件。',
    'at_least_one_action'            => '每条规则必须至少有一个动作',
    'at_least_one_active_action'     => '规则必须至少有一个启用的动作。',
    'base64'                         => '此 base64 编码数据无效',
    'model_id_invalid'               => '指定的 ID 不能用于此模型',
    'less'                           => ':attribute 必须小于 10,000,000',
    'active_url'                     => ':attribute 不是有效的网址',
    'after'                          => ':attribute 必须是一个在 :date 之后的日期',
    'date_after'                     => '开始日期必须早于结束日期。',
    'alpha'                          => ':attribute 只能包含英文字母',
    'alpha_dash'                     => ':attribute 只能包含英文字母、数字和减号',
    'alpha_num'                      => ':attribute 只能包含英文字母和数字',
    'array'                          => ':attribute 必须是一个数组',
    'unique_for_user'                => '使用 :attribute 的项目已存在',
    'before'                         => ':attribute 必须是一个在 :date 之前的日期',
    'unique_object_for_user'         => '此名称已在使用中',
    'unique_account_for_user'        => '此账户名称已在使用中',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => ':attribute 必须介于 :min 和 :max 之间',
    'between.file'               => ':attribute 必须介于 :min kB 到 :max kB之间',
    'between.string'             => ':attribute 必须介于 :min 到 :max 字符之间',
    'between.array'              => ':attribute 必须介于 :min 到 :max 项目之间',
    'boolean'                    => ':attribute 字段必须为 true 或 false',
    'confirmed'                  => ':attribute 确认状态不符',
    'date'                       => ':attribute 不是一个有效的日期',
    'date_format'                => ':attribute 不符合 :format 格式',
    'different'                  => ':attribute 和 :other 不能相同',
    'digits'                     => ':attribute 必须是 :digits 位数字',
    'digits_between'             => ':attribute 必须介于 :min 和 :max 位数字之间',
    'email'                      => ':attribute 必须是一个有效的电子邮件地址',
    'filled'                     => ':attribute 字段是必填项',
    'exists'                     => '所选的 :attribute 无效',
    'image'                      => ':attribute 必须是图片',
    'in'                         => '所选的 :attribute 无效',
    'integer'                    => ':attribute 必须是整数',
    'ip'                         => ':attribute 必须是一个有效的 IP 地址',
    'json'                       => ':attribute 必须是一个有效的 JSON 字符串',
    'max.numeric'                => ':attribute 不能大于 :max',
    'max.file'                   => ':attribute 不能大于 :max kB',
    'max.string'                 => ':attribute 不能大于 :max 字符',
    'max.array'                  => ':attribute 不能多于 :max 个项目',
    'mimes'                      => ':attribute 的文件类型必须是 :values',
    'min.numeric'                => ':attribute 至少需要 :min',
    'lte.numeric'                => ':attribute 必须小于或等于 :value',
    'min.file'                   => ':attribute 必须至少为 :min kB',
    'min.string'                 => ':attribute 最少需要有 :min 个字符',
    'min.array'                  => ':attribute 至少需要有 :min 个项目',
    'not_in'                     => '所选的 :attribute 无效',
    'numeric'                    => ':attribute 必须是数字',
    'numeric_native'             => '原始金额必须是数字',
    'numeric_destination'        => '目标金额必须是数字',
    'numeric_source'             => '来源金额必须是数字',
    'regex'                      => ':attribute 格式无效',
    'required'                   => ':attribute 字段为必填项',
    'required_if'                => ':attribute 字段在 :other 为 :value 时是必填项',
    'required_unless'            => '除非 :other 是 :values，否则 :attribute 字段是必填项',
    'required_with'              => '当 :values 存在时， :attribute 字段是必填项',
    'required_with_all'          => '当 :values 存在时， :attribute 字段是必填项',
    'required_without'           => '当 :values 不存在时， :attribute 字段是必填项',
    'required_without_all'       => '当没有任何 :values 存在时， :attribute 字段为必填项',
    'same'                       => ':attribute 和 :other 必须相符',
    'size.numeric'               => ':attribute 必须是 :size',
    'amount_min_over_max'        => '最小金额不能超过最大金额',
    'size.file'                  => ':attribute 必须为 :size kB',
    'size.string'                => ':attribute 必须为 :size 个字符',
    'size.array'                 => ':attribute 必须包含 :size 个项目',
    'unique'                     => ':attribute 已被使用',
    'string'                     => ':attribute 必须是字符串',
    'url'                        => ':attribute 格式无效',
    'timezone'                   => ':attribute 必须是有效的区域',
    '2fa_code'                   => ':attribute 字段无效',
    'dimensions'                 => ':attribute 的图片尺寸无效',
    'distinct'                   => ':attribute 字段有重复值',
    'file'                       => ':attribute 必须是文件',
    'in_array'                   => ':attribute 字段不存在于 :other',
    'present'                    => ':attribute 栏位必须存在',
    'amount_zero'                => '总金额不能为零',
    'current_target_amount'      => '当前金额必须小于目标金额',
    'unique_piggy_bank_for_user' => '存钱罐名称必须唯一',
    'unique_object_group'        => '组名称必须唯一',
    'starts_with'                => '此值必须以 :values 开头',
    'unique_webhook'             => '您已经有一个 与 URL 绑定的 webhook、触发、响应和送达。',
    'unique_existing_webhook'    => '您已经有了另一个与 URL 组合、触发、响应和交付的Webhook。',
    'same_account_type'          => '两个账户必须是相同类型的账户',
    'same_account_currency'      => '两个账户必须设置有相同的货币',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => '此密码不安全，请重试。访问 https://bit.ly/FF3-password-security 获取更多信息。',
    'valid_recurrence_rep_type'   => '此重复类型不能用于定期交易',
    'valid_recurrence_rep_moment' => '此重复时刻不能用于此重复类型',
    'invalid_account_info'        => '无效的账户信息',
    'attributes'                  => [
        'email'                   => '电子邮件地址',
        'description'             => '描述',
        'amount'                  => '金额',
        'transactions.*.amount'   => '交易金额',
        'name'                    => '名称',
        'piggy_bank_id'           => '存钱罐 ID',
        'targetamount'            => '目标金额',
        'opening_balance_date'    => '开户日期',
        'opening_balance'         => '初始余额',
        'match'                   => '符合',
        'amount_min'              => '最小金额',
        'amount_max'              => '最大金额',
        'title'                   => '标题',
        'tag'                     => '标签',
        'transaction_description' => '交易描述',
        'rule-action-value.1'     => '规则动作值 #1',
        'rule-action-value.2'     => '规则动作值 #2',
        'rule-action-value.3'     => '规则动作值 #3',
        'rule-action-value.4'     => '规则动作值 #4',
        'rule-action-value.5'     => '规则动作值 #5',
        'rule-action.1'           => '规则动作 #1',
        'rule-action.2'           => '规则动作 #2',
        'rule-action.3'           => '规则动作 #3',
        'rule-action.4'           => '规则动作 #4',
        'rule-action.5'           => '规则动作 #5',
        'rule-trigger-value.1'    => '规则触发值 #1',
        'rule-trigger-value.2'    => '规则触发值 #2',
        'rule-trigger-value.3'    => '规则触发值 #3',
        'rule-trigger-value.4'    => '规则触发值 #4',
        'rule-trigger-value.5'    => '规则触发值 #5',
        'rule-trigger.1'          => '规则触发条件 #1',
        'rule-trigger.2'          => '规则触发条件 #2',
        'rule-trigger.3'          => '规则触发条件 #3',
        'rule-trigger.4'          => '规则触发条件 #4',
        'rule-trigger.5'          => '规则触发条件 #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => '需要一个有效的来源账户 ID 和/或来源账户名称才能继续',
    'withdrawal_source_bad_data'  => '[a] 搜索ID“:id”或名称“:name”时，没有找到有效的来源账户。',
    'withdrawal_dest_need_data'   => '[a] 需要一个有效的目标账户ID和/或有效的目标账户名称才能继续。',
    'withdrawal_dest_bad_data'    => '搜索 ID “:id”或名称“:name”时找不到有效的目标账户',

    'withdrawal_dest_iban_exists' => '此目标账户的 IBAN 已经用于资产账户或债务账户，无法用作支出目标。',
    'deposit_src_iban_exists'     => '此来源账户的 IBAN 已经用于资产账户或债务账户，无法用作收入来源。',

    'reconciliation_source_bad_data' => '在搜索ID“:id”或名称“:name”时，没有找到有效的对账帐户',

    'generic_source_bad_data' => '[e] 搜索ID“:id”或名称“:name”时，没有找到有效的来源账户。',

    'deposit_source_need_data' => '需要一个有效的来源账户 ID 和/或来源账户名称才能继续',
    'deposit_source_bad_data'  => '[b] 搜索ID“:id”或名称“:name”时，没有找到有效的来源账户。',
    'deposit_dest_need_data'   => '[b] 需要一个有效的目标账户ID和/或有效的目标账户名称才能继续。',
    'deposit_dest_bad_data'    => '搜索 ID “:id”或名称“:name”时找不到有效的目标账户',
    'deposit_dest_wrong_type'  => '提交的目标账户的类型不正确',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => '需要一个有效的来源账户 ID 和/或来源账户名称才能继续',
    'transfer_source_bad_data'  => '[c]搜索ID“:id”或名称“:name”时，没有找到有效的来源账户。',
    'transfer_dest_need_data'   => '[c] 需要一个有效的目标账户ID和/或有效的目标账户名称才能继续。',
    'transfer_dest_bad_data'    => '搜索 ID “:id”或名称“:name”时找不到有效的目标账户',
    'need_id_in_edit'           => '每笔拆分必须有 transaction_journal_id (有效的 ID 或 0)。',

    'ob_source_need_data'           => '需要一个有效的来源账户ID和/或来源账户名称才能继续。',
    'lc_source_need_data'           => '需要获取一个有效的来源账户 ID 才能继续。',
    'ob_dest_need_data'             => '[d] 需要一个有效的目标账户ID和/或有效的目标账户名称才能继续。',
    'ob_dest_bad_data'              => '搜索 ID “:id”或名称“:name”时找不到有效的目标账户',
    'reconciliation_either_account' => '要提交对账，您必须提交来源或目标帐户。不要都提交，也不要都不提交。',

    'generic_invalid_source'      => '您不能使用此账户作为来源账户',
    'generic_invalid_destination' => '您不能使用此账户作为目标账户',

    'generic_no_source'      => '必须提供来源账户或者交易ID',
    'generic_no_destination' => '必须提供目标账户或者交易ID',

    'gte.numeric' => ':attribute 必须大于或等于 :value',
    'gt.numeric'  => ':attribute 必须大于 :value',
    'gte.file'    => ':attribute 必须大于或等于 :value kB',
    'gte.string'  => ':attribute 必须大于或等于 :value 字符',
    'gte.array'   => ':attribute 必须有 :value 个或更多项目',

    'amount_required_for_auto_budget' => '金额是必填项',
    'auto_budget_amount_positive'     => '金额必须大于零',
    'auto_budget_period_mandatory'    => '自动预算周期是必填项',

    // no access to administration:
    'no_access_user_group'            => '您没有管理员访问权限',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */

