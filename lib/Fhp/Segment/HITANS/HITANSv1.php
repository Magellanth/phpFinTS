<?php /** @noinspection PhpUnused */

namespace Fhp\Segment\HITANS;

use Fhp\Segment\BaseGeschaeftsvorfallparameter;

/**
 * Segment: Zwei-Schritt-TAN-Einreichung, Parameter (Version 1)
 * Parameters for: HKTANv1
 * Bezugssegment: HKVVB
 * Sender: Kreditinstitut
 *
 * @link: https://www.hbci-zka.de/dokumente/spezifikation_deutsch/archiv/FinTS_V3.0_2017-10-06-FV_RM.zip
 */
class HITANSv1 extends BaseGeschaeftsvorfallparameter implements HITANS
{
    /** @var ParameterZweiSchrittTanEinreichungV1 */
    public $parameterZweiSchrittTanEinreichung;

    /** @return ParameterZweiSchrittTanEinreichungV1 */
    public function getParameterZweiSchrittTanEinreichung(): ParameterZweiSchrittTanEinreichung
    {
        return $this->parameterZweiSchrittTanEinreichung;
    }
}
