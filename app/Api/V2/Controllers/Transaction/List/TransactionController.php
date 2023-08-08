<?php
/*
 * TransactionController.php
 * Copyright (c) 2023 james@firefly-iii.org
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

namespace FireflyIII\Api\V2\Controllers\Transaction\List;

use FireflyIII\Api\V2\Controllers\Controller;
use FireflyIII\Api\V2\Request\Transaction\ListRequest;
use FireflyIII\Helpers\Collector\GroupCollectorInterface;
use FireflyIII\Transformers\V2\TransactionGroupTransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class TransactionController
 */
class TransactionController extends Controller
{

    /**
     * @param ListRequest $request
     *
     * @return JsonResponse
     */
    public function list(ListRequest $request): JsonResponse
    {
        // collect transactions:
        $limit = $request->getLimit();
        $page  = $request->getPage();
        $page  = max($page, 1);

        if ($limit > 0 && $limit <= $this->pageSize) {
            $this->pageSize = $limit;
        }


        /** @var GroupCollectorInterface $collector */
        $collector = app(GroupCollectorInterface::class);
        $collector->setUserGroup(auth()->user()->userGroup)
                  ->withAPIInformation()
                  ->setLimit($this->pageSize)
                  ->setPage($page)
                  ->setTypes($request->getTransactionTypes());

        $start = $request->getStartDate();
        $end   = $request->getEndDate();
        if (null !== $start) {
            $collector->setStart($start);
        }
        if (null !== $end) {
            $collector->setEnd($start);
        }

        $paginator = $collector->getPaginatedGroups();
        $paginator->setPath(
            sprintf('%s?%s',
                    route('api.v2.transactions.list'),
                    $request->buildParams())
        );

        return response()
            ->json($this->jsonApiList('transactions', $paginator, new TransactionGroupTransformer()))
            ->header('Content-Type', self::CONTENT_TYPE);
    }


}
