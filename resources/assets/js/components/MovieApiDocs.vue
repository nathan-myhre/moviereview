<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            Find Movies
                        </h3>
                        Path: /api/movies
                        <br/>
                        Type: GET
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Parameter</th>
                                    <th scope="col">Required</th>
                                    <th scope="col">Parameter Type</th>
                                    <th scope="col">Valid Options</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">s</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>movie, series, episode</td>
                                    <td>Movie title to search for.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            Get Movie Details
                        </h3>
                        Path: /api/movies/{id}
                        <br/>
                        Type: GET
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Parameter</th>
                                    <th scope="col">Required</th>
                                    <th scope="col">Parameter Type</th>
                                    <th scope="col">Valid Options</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">id</th>
                                    <td>Yes</td>
                                    <td>path</td>
                                    <td></td>
                                    <td>A valid IMDb ID. (e.g. tt1285016)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>

