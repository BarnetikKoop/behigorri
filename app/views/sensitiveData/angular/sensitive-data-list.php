<table class="table table-striped table-hover js-sensitive-data-list"
    ng-controller="SensitiveDataListController">
    <thead>
        <tr>
            <th class="col-xs-5">Description</th>
            <th class="col-xs-4 text-right">Last update</th>
            <th class="col-xs-3"></th>
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="datum in data">
            <td class="col-xs-5 js-datum-name">
                <span class="datum-name">
                    {{datum.name}}
                </span>
                <span class="datum-tags">
                    <ul class="list-inline">
                        <li ng-repeat="tag in datum.tags | filter:tags.hasSensitiveData">
                            <span class="label label-primary">{{tag.name}}</span>
                        </li>
                    </ul>
                </span>
            </td>
            <td class="col-xs-4 text-right">
                <small>{{ datum.updated_at }} ({{ datum.user.username }})</small>
            </td>
            <td class="col-xs-3 text-right js-action-links">
                <span ng-click="downloadFile(datum)" ng-show="datum.file" title="download attatched file" data-toggle="tooltip" class="js-download fa-stack fa-lg js-action-link" data-datum-id="{{ datum.id }}">
                    <i class="fa fa-circle-o fa-stack-2x"></i>
                    <i class="fa fa-download fa-stack-1x"></i>
                </span>
                <span ng-click="decryptData(datum)" title="decrypt" class="js-decrypt fa-stack fa-lg js-action-link" data-datum-id="{{ datum.id }}">
                    <i class="fa fa-circle-o fa-stack-2x"></i>
                    <i class="fa fa-unlock-alt fa-stack-1x"></i>
                </span>
                <span ng-click="deleteData(datum)" title="delete" class="js-delete fa-stack fa-lg js-action-link" data-datum-id="{{ datum.id }}">
                    <i class="fa fa-circle-o fa-stack-2x"></i>
                    <i class="fa fa-times fa-stack-1x"></i>
                </span>
            </td>
        </tr>
    </tbody>
</table>
