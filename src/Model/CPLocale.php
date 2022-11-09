<?php
/**
 * CPLocale
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 8.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Upmind\EnhanceSdk\Model;
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * CPLocale Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CPLocale
{
    /**
     * Possible values of this enum
     */
    public const AF = 'af';

    public const AF_ZA = 'af-ZA';

    public const AR = 'ar';

    public const AR_AE = 'ar-AE';

    public const AR_BH = 'ar-BH';

    public const AR_DZ = 'ar-DZ';

    public const AR_EG = 'ar-EG';

    public const AR_IQ = 'ar-IQ';

    public const AR_JO = 'ar-JO';

    public const AR_KW = 'ar-KW';

    public const AR_LB = 'ar-LB';

    public const AR_LY = 'ar-LY';

    public const AR_MA = 'ar-MA';

    public const AR_OM = 'ar-OM';

    public const AR_QA = 'ar-QA';

    public const AR_SA = 'ar-SA';

    public const AR_SY = 'ar-SY';

    public const AR_TN = 'ar-TN';

    public const AR_YE = 'ar-YE';

    public const AZ = 'az';

    public const AZ_AZ = 'az-AZ';

    public const AZ_CYRL_AZ = 'az-Cyrl-AZ';

    public const BE = 'be';

    public const BE_BY = 'be-BY';

    public const BG = 'bg';

    public const BG_BG = 'bg-BG';

    public const BS_BA = 'bs-BA';

    public const CA = 'ca';

    public const CA_ES = 'ca-ES';

    public const CS = 'cs';

    public const CS_CZ = 'cs-CZ';

    public const CY = 'cy';

    public const CY_GB = 'cy-GB';

    public const DA = 'da';

    public const DA_DK = 'da-DK';

    public const DE = 'de';

    public const DE_AT = 'de-AT';

    public const DE_CH = 'de-CH';

    public const DE_DE = 'de-DE';

    public const DE_LI = 'de-LI';

    public const DE_LU = 'de-LU';

    public const DV = 'dv';

    public const DV_MV = 'dv-MV';

    public const EL = 'el';

    public const EL_GR = 'el-GR';

    public const EN = 'en';

    public const EN_AU = 'en-AU';

    public const EN_BZ = 'en-BZ';

    public const EN_CA = 'en-CA';

    public const EN_CB = 'en-CB';

    public const EN_GB = 'en-GB';

    public const EN_IE = 'en-IE';

    public const EN_JM = 'en-JM';

    public const EN_NZ = 'en-NZ';

    public const EN_PH = 'en-PH';

    public const EN_TT = 'en-TT';

    public const EN_US = 'en-US';

    public const EN_ZA = 'en-ZA';

    public const EN_ZW = 'en-ZW';

    public const EO = 'eo';

    public const ES = 'es';

    public const ES_AR = 'es-AR';

    public const ES_BO = 'es-BO';

    public const ES_CL = 'es-CL';

    public const ES_CO = 'es-CO';

    public const ES_CR = 'es-CR';

    public const ES_DO = 'es-DO';

    public const ES_EC = 'es-EC';

    public const ES_ES = 'es-ES';

    public const ES_GT = 'es-GT';

    public const ES_HN = 'es-HN';

    public const ES_MX = 'es-MX';

    public const ES_NI = 'es-NI';

    public const ES_PA = 'es-PA';

    public const ES_PE = 'es-PE';

    public const ES_PR = 'es-PR';

    public const ES_PY = 'es-PY';

    public const ES_SV = 'es-SV';

    public const ES_UY = 'es-UY';

    public const ES_VE = 'es-VE';

    public const ET = 'et';

    public const ET_EE = 'et-EE';

    public const EU = 'eu';

    public const EU_ES = 'eu-ES';

    public const FA = 'fa';

    public const FA_IR = 'fa-IR';

    public const FI = 'fi';

    public const FI_FI = 'fi-FI';

    public const FO = 'fo';

    public const FO_FO = 'fo-FO';

    public const FR = 'fr';

    public const FR_BE = 'fr-BE';

    public const FR_CA = 'fr-CA';

    public const FR_CH = 'fr-CH';

    public const FR_FR = 'fr-FR';

    public const FR_LU = 'fr-LU';

    public const FR_MC = 'fr-MC';

    public const GL = 'gl';

    public const GL_ES = 'gl-ES';

    public const GU = 'gu';

    public const GU_IN = 'gu-IN';

    public const HE = 'he';

    public const HE_IL = 'he-IL';

    public const HI = 'hi';

    public const HI_IN = 'hi-IN';

    public const HR = 'hr';

    public const HR_BA = 'hr-BA';

    public const HR_HR = 'hr-HR';

    public const HU = 'hu';

    public const HU_HU = 'hu-HU';

    public const HY = 'hy';

    public const HY_AM = 'hy-AM';

    public const ID = 'id';

    public const ID_ID = 'id-ID';

    public const IS = 'is';

    public const IS_IS = 'is-IS';

    public const IT = 'it';

    public const IT_CH = 'it-CH';

    public const IT_IT = 'it-IT';

    public const JA = 'ja';

    public const JA_JP = 'ja-JP';

    public const KA = 'ka';

    public const KA_GE = 'ka-GE';

    public const KK = 'kk';

    public const KK_KZ = 'kk-KZ';

    public const KN = 'kn';

    public const KN_IN = 'kn-IN';

    public const KO = 'ko';

    public const KO_KR = 'ko-KR';

    public const KOK = 'kok';

    public const KOK_IN = 'kok-IN';

    public const KY = 'ky';

    public const KY_KG = 'ky-KG';

    public const LT = 'lt';

    public const LT_LT = 'lt-LT';

    public const LV = 'lv';

    public const LV_LV = 'lv-LV';

    public const MI = 'mi';

    public const MI_NZ = 'mi-NZ';

    public const MK = 'mk';

    public const MK_MK = 'mk-MK';

    public const MN = 'mn';

    public const MN_MN = 'mn-MN';

    public const MR = 'mr';

    public const MR_IN = 'mr-IN';

    public const MS = 'ms';

    public const MS_BN = 'ms-BN';

    public const MS_MY = 'ms-MY';

    public const MT = 'mt';

    public const MT_MT = 'mt-MT';

    public const NB = 'nb';

    public const NB_NO = 'nb-NO';

    public const NL = 'nl';

    public const NL_BE = 'nl-BE';

    public const NL_NL = 'nl-NL';

    public const NN_NO = 'nn-NO';

    public const NS = 'ns';

    public const NS_ZA = 'ns-ZA';

    public const PA = 'pa';

    public const PA_IN = 'pa-IN';

    public const PL = 'pl';

    public const PL_PL = 'pl-PL';

    public const PS = 'ps';

    public const PS_AR = 'ps-AR';

    public const PT = 'pt';

    public const PT_BR = 'pt-BR';

    public const PT_PT = 'pt-PT';

    public const QU = 'qu';

    public const QU_BO = 'qu-BO';

    public const QU_EC = 'qu-EC';

    public const QU_PE = 'qu-PE';

    public const RO = 'ro';

    public const RO_RO = 'ro-RO';

    public const RU = 'ru';

    public const RU_RU = 'ru-RU';

    public const SA = 'sa';

    public const SA_IN = 'sa-IN';

    public const SE = 'se';

    public const SE_FI = 'se-FI';

    public const SE_NO = 'se-NO';

    public const SE_SE = 'se-SE';

    public const SK = 'sk';

    public const SK_SK = 'sk-SK';

    public const SL = 'sl';

    public const SL_SI = 'sl-SI';

    public const SQ = 'sq';

    public const SQ_AL = 'sq-AL';

    public const SR_BA = 'sr-BA';

    public const SR_CYRL_BA = 'sr-Cyrl-BA';

    public const SR_SP = 'sr-SP';

    public const SR_CYRL_SP = 'sr-Cyrl-SP';

    public const SV = 'sv';

    public const SV_FI = 'sv-FI';

    public const SV_SE = 'sv-SE';

    public const SW = 'sw';

    public const SW_KE = 'sw-KE';

    public const SYR = 'syr';

    public const SYR_SY = 'syr-SY';

    public const TA = 'ta';

    public const TA_IN = 'ta-IN';

    public const TE = 'te';

    public const TE_IN = 'te-IN';

    public const TH = 'th';

    public const TH_TH = 'th-TH';

    public const TL = 'tl';

    public const TL_PH = 'tl-PH';

    public const TN = 'tn';

    public const TN_ZA = 'tn-ZA';

    public const TR = 'tr';

    public const TR_TR = 'tr-TR';

    public const TT = 'tt';

    public const TT_RU = 'tt-RU';

    public const TS = 'ts';

    public const UK = 'uk';

    public const UK_UA = 'uk-UA';

    public const UR = 'ur';

    public const UR_PK = 'ur-PK';

    public const UZ = 'uz';

    public const UZ_UZ = 'uz-UZ';

    public const UZ_CYRL_UZ = 'uz-Cyrl-UZ';

    public const VI = 'vi';

    public const VI_VN = 'vi-VN';

    public const XH = 'xh';

    public const XH_ZA = 'xh-ZA';

    public const ZH = 'zh';

    public const ZH_CN = 'zh-CN';

    public const ZH_HK = 'zh-HK';

    public const ZH_MO = 'zh-MO';

    public const ZH_SG = 'zh-SG';

    public const ZH_TW = 'zh-TW';

    public const ZU = 'zu';

    public const ZU_ZA = 'zu-ZA';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AF,
            self::AF_ZA,
            self::AR,
            self::AR_AE,
            self::AR_BH,
            self::AR_DZ,
            self::AR_EG,
            self::AR_IQ,
            self::AR_JO,
            self::AR_KW,
            self::AR_LB,
            self::AR_LY,
            self::AR_MA,
            self::AR_OM,
            self::AR_QA,
            self::AR_SA,
            self::AR_SY,
            self::AR_TN,
            self::AR_YE,
            self::AZ,
            self::AZ_AZ,
            self::AZ_CYRL_AZ,
            self::BE,
            self::BE_BY,
            self::BG,
            self::BG_BG,
            self::BS_BA,
            self::CA,
            self::CA_ES,
            self::CS,
            self::CS_CZ,
            self::CY,
            self::CY_GB,
            self::DA,
            self::DA_DK,
            self::DE,
            self::DE_AT,
            self::DE_CH,
            self::DE_DE,
            self::DE_LI,
            self::DE_LU,
            self::DV,
            self::DV_MV,
            self::EL,
            self::EL_GR,
            self::EN,
            self::EN_AU,
            self::EN_BZ,
            self::EN_CA,
            self::EN_CB,
            self::EN_GB,
            self::EN_IE,
            self::EN_JM,
            self::EN_NZ,
            self::EN_PH,
            self::EN_TT,
            self::EN_US,
            self::EN_ZA,
            self::EN_ZW,
            self::EO,
            self::ES,
            self::ES_AR,
            self::ES_BO,
            self::ES_CL,
            self::ES_CO,
            self::ES_CR,
            self::ES_DO,
            self::ES_EC,
            self::ES_ES,
            self::ES_GT,
            self::ES_HN,
            self::ES_MX,
            self::ES_NI,
            self::ES_PA,
            self::ES_PE,
            self::ES_PR,
            self::ES_PY,
            self::ES_SV,
            self::ES_UY,
            self::ES_VE,
            self::ET,
            self::ET_EE,
            self::EU,
            self::EU_ES,
            self::FA,
            self::FA_IR,
            self::FI,
            self::FI_FI,
            self::FO,
            self::FO_FO,
            self::FR,
            self::FR_BE,
            self::FR_CA,
            self::FR_CH,
            self::FR_FR,
            self::FR_LU,
            self::FR_MC,
            self::GL,
            self::GL_ES,
            self::GU,
            self::GU_IN,
            self::HE,
            self::HE_IL,
            self::HI,
            self::HI_IN,
            self::HR,
            self::HR_BA,
            self::HR_HR,
            self::HU,
            self::HU_HU,
            self::HY,
            self::HY_AM,
            self::ID,
            self::ID_ID,
            self::IS,
            self::IS_IS,
            self::IT,
            self::IT_CH,
            self::IT_IT,
            self::JA,
            self::JA_JP,
            self::KA,
            self::KA_GE,
            self::KK,
            self::KK_KZ,
            self::KN,
            self::KN_IN,
            self::KO,
            self::KO_KR,
            self::KOK,
            self::KOK_IN,
            self::KY,
            self::KY_KG,
            self::LT,
            self::LT_LT,
            self::LV,
            self::LV_LV,
            self::MI,
            self::MI_NZ,
            self::MK,
            self::MK_MK,
            self::MN,
            self::MN_MN,
            self::MR,
            self::MR_IN,
            self::MS,
            self::MS_BN,
            self::MS_MY,
            self::MT,
            self::MT_MT,
            self::NB,
            self::NB_NO,
            self::NL,
            self::NL_BE,
            self::NL_NL,
            self::NN_NO,
            self::NS,
            self::NS_ZA,
            self::PA,
            self::PA_IN,
            self::PL,
            self::PL_PL,
            self::PS,
            self::PS_AR,
            self::PT,
            self::PT_BR,
            self::PT_PT,
            self::QU,
            self::QU_BO,
            self::QU_EC,
            self::QU_PE,
            self::RO,
            self::RO_RO,
            self::RU,
            self::RU_RU,
            self::SA,
            self::SA_IN,
            self::SE,
            self::SE_FI,
            self::SE_NO,
            self::SE_SE,
            self::SK,
            self::SK_SK,
            self::SL,
            self::SL_SI,
            self::SQ,
            self::SQ_AL,
            self::SR_BA,
            self::SR_CYRL_BA,
            self::SR_SP,
            self::SR_CYRL_SP,
            self::SV,
            self::SV_FI,
            self::SV_SE,
            self::SW,
            self::SW_KE,
            self::SYR,
            self::SYR_SY,
            self::TA,
            self::TA_IN,
            self::TE,
            self::TE_IN,
            self::TH,
            self::TH_TH,
            self::TL,
            self::TL_PH,
            self::TN,
            self::TN_ZA,
            self::TR,
            self::TR_TR,
            self::TT,
            self::TT_RU,
            self::TS,
            self::UK,
            self::UK_UA,
            self::UR,
            self::UR_PK,
            self::UZ,
            self::UZ_UZ,
            self::UZ_CYRL_UZ,
            self::VI,
            self::VI_VN,
            self::XH,
            self::XH_ZA,
            self::ZH,
            self::ZH_CN,
            self::ZH_HK,
            self::ZH_MO,
            self::ZH_SG,
            self::ZH_TW,
            self::ZU,
            self::ZU_ZA
        ];
    }
}


