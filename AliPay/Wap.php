<?php

// +----------------------------------------------------------------------
// | wechat-developer-client
// +----------------------------------------------------------------------
// | 版权所有 2014~2019 合肥埃米特信息科技有限公司 [ http://www.emmetltd.com ]
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/emmtltd/wechat-developer-client
// +----------------------------------------------------------------------

namespace AliPay;

use WeChat\Contracts\BasicAliPay;

/**
 * 手机WAP网站支付支持
 * Class Wap
 * @package AliPay
 */
class Wap extends BasicAliPay
{
    /**
     * Wap constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        parent::__construct($options);
        $this->options->set('method', 'alipay.trade.wap.pay');
        $this->params->set('product_code', 'QUICK_WAP_WAY');
    }

    /**
     * 创建数据操作
     * @param array $options
     * @return string
     */
    public function apply($options)
    {
        parent::applyData($options);
        return $this->buildPayHtml();
    }
}