<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            Get All Reviews
                        </h3>
                        Path: /api/reviews
                        <br/>
                        Type: GET
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No parameters required</th>
                                </tr>
                            </thead>
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
                            Get Specific Review
                        </h3>
                        Path: /api/reviews/{id}
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
                                    <td>Review ID to search for.</td>
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
                            Create Review
                        </h3>
                        Path: /api/reviews/
                        <br/>
                        Type: POST
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
                                    <th scope="row">imdb_id</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>(e.g. tt0375912 or tt1285016)</td>
                                    <td>Movie id being reviewed.</td>
                                </tr>
                                <tr>
                                    <th scope="row">user_id</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>*Will be updated to API key*</td>
                                    <td>MovieReview user id.</td>
                                </tr>
                                <tr>
                                    <th scope="row">content</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>Great review!</td>
                                    <td>Review content about the movie.</td>
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
                            Edit Review
                        </h3>
                        Path: /api/reviews/{id}
                        <br/>
                        Type: PUT
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
                                    <td>Review ID to edit.</td>
                                </tr>
                                <tr>
                                    <th scope="row">user_id</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>*Will be updated to API key*</td>
                                    <td>Same MovieReview user id for review in question.</td>
                                </tr>
                                <tr>
                                    <th scope="row">content</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>Could have been better!</td>
                                    <td>New review content about the movie.</td>
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
                            Delete Review
                        </h3>
                        Path: /api/reviews/{id}
                        <br/>
                        Type: DELETE
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
                                    <td>Review ID to delete.</td>
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
                            Add Review Vote
                        </h3>
                        Path: /api/reviews/{id}/vote
                        <br/>                        
                        Type: POST
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
                                    <td>Review ID where vote is being added.</td>
                                </tr>
                                <tr>
                                    <th scope="row">user_id</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>*Will be updated to API key*</td>
                                    <td>MovieReview user id.</td>
                                </tr>
                                <tr>
                                    <th scope="row">value</th>
                                    <td>Yes</td>
                                    <td>query</td>
                                    <td>Either 1 or -1</td>
                                    <td>Review ID to add vote. Only one vote per user per review id.</td>
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

