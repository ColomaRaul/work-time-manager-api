<?php declare(strict_types=1);

namespace App\WorkEntry\Application\User\Start;

use App\Shared\Application\Command\CommandInterface;

final class UserStartWorkEntryCommand implements CommandInterface
{
    public function __construct(
        public string $workEntryId,
        public string $userId,
    ) {
    }

    public function workEntryId(): string
    {
        return $this->workEntryId;
    }

    public function userId(): string
    {
        return $this->userId;
    }
}