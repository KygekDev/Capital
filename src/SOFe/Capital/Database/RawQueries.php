<?php

/*
 * Auto-generated by libasynql-fx
 * Created from init.sql, transaction.sql, account.sql, init.sql
 */

declare(strict_types=1);

namespace SOFe\Capital\Database;

use Generator;
use poggit\libasynql\DataConnector;
use SOFe\AwaitGenerator\Await;

final class RawQueries{
	public function __construct(private DataConnector $conn) {}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:8
	 * @param int $value
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
	 */
	public function accountCreate(int $value, string $id, ) : Generator {
		$this->conn->executeInsert("capital.account.create", ["value" => $value, "id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:12
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
	 */
	public function accountFetch(string $id, ) : Generator {
		$this->conn->executeSelect("capital.account.fetch", ["id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:16
	 * @param string[] $ids
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
	 */
	public function accountFetchList(array $ids, ) : Generator {
		$this->conn->executeSelect("capital.account.fetch_list", ["ids" => $ids, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:23
	 * @param string $value
	 * @param string $name
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
	 */
	public function accountLabelAdd(string $value, string $name, string $id, ) : Generator {
		$this->conn->executeInsert("capital.account.label.add", ["value" => $value, "name" => $name, "id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:36
	 * @param string $value
	 * @param string $name
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
	 */
	public function accountLabelAddOrUpdate(string $value, string $name, string $id, ) : Generator {
		$this->conn->executeInsert("capital.account.label.add_or_update", ["value" => $value, "name" => $name, "id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:41
	 * @param string $name
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
	 */
	public function accountLabelFetch(string $name, string $id, ) : Generator {
		$this->conn->executeSelect("capital.account.label.fetch", ["name" => $name, "id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:45
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
	 */
	public function accountLabelFetchAll(string $id, ) : Generator {
		$this->conn->executeSelect("capital.account.label.fetch_all", ["id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:49
	 * @param string[] $ids
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
	 */
	public function accountLabelFetchAllMulti(array $ids, ) : Generator {
		$this->conn->executeSelect("capital.account.label.fetch_all_multi", ["ids" => $ids, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/account.sql:29
	 * @param string $value
	 * @param string $name
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
	 */
	public function accountLabelUpdate(string $value, string $name, string $id, ) : Generator {
		$this->conn->executeChange("capital.account.label.update", ["value" => $value, "name" => $name, "id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/init.sql:79
	 * - resources/sqlite/init.sql:46
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, int>
	 */
	public function init() : Generator {
		$this->conn->executeChange("capital.init", [], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}

	/**
	 * <h4>Declared in:</h4>
	 * - resources/mysql/transaction.sql:14
	 * @param int $dest_max
	 * @param int $src_min
	 * @param int $delta
	 * @param string $dest
	 * @param string $src
	 * @param string $id
	 * @return Generator<mixed, 'all'|'once'|'race'|'reject'|'resolve'|array{'resolve'}|Generator<mixed, mixed, mixed, mixed>|null, mixed, list<array<string, mixed>>>
	 */
	public function transactionCreate(int $dest_max, int $src_min, int $delta, string $dest, string $src, string $id, ) : Generator {
		$this->conn->executeSelect("capital.transaction.create", ["dest_max" => $dest_max, "src_min" => $src_min, "delta" => $delta, "dest" => $dest, "src" => $src, "id" => $id, ], yield Await::RESOLVE, yield Await::REJECT);
		return yield Await::ONCE;
	}
}