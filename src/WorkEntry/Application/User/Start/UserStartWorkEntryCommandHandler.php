<?php declare(strict_types=1);

namespace App\WorkEntry\Application\User\Start;

use App\Shared\Application\Command\CommandHandlerInterface;
use App\Shared\Domain\ValueObject\Uuid;
use App\WorkEntry\Domain\Starter\WorkEntryStarter;
use Exception;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final readonly class UserStartWorkEntryCommandHandler implements CommandHandlerInterface
{
    public function __construct(
        private WorkEntryStarter $workEntryStarter
    ) {
    }

    /**
     * @throws Exception
     */
    public function __invoke(UserStartWorkEntryCommand $command): void
    {
        $this->workEntryStarter->start(Uuid::from($command->workEntryId()), Uuid::from($command->userId()));
    }
}
