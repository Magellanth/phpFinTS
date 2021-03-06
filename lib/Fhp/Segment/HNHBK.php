<?php

namespace Fhp\Segment;

use Fhp\FinTsInternal;

/**
 * Class HNHBK (Nachrichtenkopf)
 * Segment type: Administration
 *
 * @link: http://www.hbci-zka.de/dokumente/spezifikation_deutsch/fintsv3/FinTS_3.0_Formals_2011-06-14_final_version.pdf
 * Section: B.5.2
 */
class HNHBK extends AbstractSegment
{
    const NAME = 'HNHBK';
    const VERSION = 3;
    const HEADER_LENGTH = 29;

    /**
     * HNHBK constructor.
     */
    public function __construct(string $messageLength, string $dialogId, int $messageNumber)
    {
        if (strlen($messageLength) != 12) {
            $messageLength = str_pad((int) $messageLength + static::HEADER_LENGTH + strlen($dialogId) + strlen($messageNumber), 12, '0', STR_PAD_LEFT);
        }

        parent::__construct(
            static::NAME,
            1, // always the first segment
            static::VERSION,
            [
                $messageLength,
                300, // HBCI / FINTS version 3.0,
                FinTsInternal::escapeString($dialogId),
                $messageNumber,
            ]
        );
    }

    public function getName(): string
    {
        return static::NAME;
    }
}
