<?php

declare(strict_types=1);

namespace App\Domain\Contact\Entity;

use JsonSerializable;

/**
 * @OA\Schema(
 *   title="Contact",
 *   required={"id", "name", "nickname", "phone"}
 * )
 */
class Contact implements JsonSerializable
{
    /**
     * @OA\Property(type="integer", format="int32")
     */
    private int $id;

    /**
     * @OA\Property(type="string")
     */
    private string $name;

    /**
     * @OA\Property(type="string")
     */
    private string $nickname;

    /**
     * @OA\Property(type="string")
     */
    private int $phone;

    public function __construct(
        int $id,
        string $name,
        string $nickname,
        int $phone
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function getPhone(): int
    {
        return $this->phone;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "nickname" => $this->nickname,
            "phone" => $this->phone
        ];
    }
}
