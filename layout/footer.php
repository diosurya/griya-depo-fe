        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">

            </div>
        </footer>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script> -->
        <script src="../asset/t.js"></script>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                checkTokenAndRedirect();
                setInterval(checkTokenAndRedirect, 60 * 60 * 1000); // 60 minutes

                function checkTokenAndRedirect() {
                    var token = localStorage.getItem('token');
                    if (!token) {
                        window.location.href = '../index.php';
                    } else {
                        var decodedToken = parseJwt(token);
                        console.log(decodedToken)

                        var currentTime = Math.floor(Date.now() / 1000);
                        if (decodedToken.exp < currentTime) {
                            refreshToken();
                        }
                    }
                }

                function parseJwt(token) {
                    var base64Url = token.split('.')[1];
                    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
                    var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
                        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
                    }).join(''));

                    return JSON.parse(jsonPayload);
                };

                function refreshToken() {
                    var refreshToken = localStorage.getItem('token');
                    axios.post(baseUrl + 'login', {
                            refreshToken: refreshToken
                        })
                        .then(function(response) {
                            var newToken = response.data.token;
                            localStorage.setItem('token', newToken);
                            window.location.href = 'dashboard.php';
                        })
                        .catch(function(error) {
                            console.error('Token refresh failed:', error);
                            sessionStorage.removeItem('token');
                            localStorage.removeItem('token');
                            window.location.href = '../index.php';
                        });
                }

                $('#dttb').DataTable({
                    dom: 'ftipr'
                });
                $('.dttb-v3').DataTable({
                    dom: 'tipr'
                });
                $('#dttb-v').DataTable();

                // LOGOUT
                function logout() {
                    const token = localStorage.getItem('token');
                    axios.post(baseUrl + 'logout', {}, {
                            headers: {
                                'Authorization': `Bearer ${token}`
                            }
                        })
                        .then(function(response) {
                            console.log(response.data);
                            localStorage.removeItem('token');
                            localStorage.removeItem('user');
                            window.location.href = '../index.php';
                        })
                        .catch(function(error) {
                            console.error('Logout API error:', error);
                            window.location.href = 'dashboard.php';
                        });
                }

                // Add an event listener to the logout link
                document.getElementById('logout').addEventListener('click', function(event) {
                    event.preventDefault();
                    logout();
                });
            });
        </script>


        <?php
        $currentFile = basename($_SERVER["SCRIPT_FILENAME"], '.php');
        $excludedFiles = ['contact_option', 'bank_add', 'contact_detail', 'contact_edit'];
        if (!in_array($currentFile, $excludedFiles)) {
            echo '<script>';
            echo 'localStorage.removeItem("contact_id");';
            echo '</script>';
        }
        ?>
        </div>
        </body>

        </html>