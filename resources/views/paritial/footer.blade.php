<footer class="text-white text-center text-lg-start bg-success">
    <div class="container p-4">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">{{__('O nas')}}</h5>
                <p>
                    {{__('ZOO World jest średniej wielkości ogrodem zoologicznym. Chronimy przyrodę, by ocalić wspólny świat ludzi i zwierząt.')}}
                </p>
                <div class="mt-4">
                    <a href="https://facebook.com/" class="btn btn-social-icon btn-facebook" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x"></i>
                  </span>
                    </a>
                    <a href="https://instagram.com/" class="btn btn-social-icon btn-instagram" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x"></i>
                  </span>
                    </a>
                    <a href="https://twitter.com/" class="btn btn-social-icon btn-twitter" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x"></i>
                  </span>
                    </a>
                    <a href="https://google.com/" class="btn btn-social-icon btn-google" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-2x"></i>
                    <i class="fa fa-google fa-stack-1x"></i>
                  </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">{{__('Newsletter')}}</h5>
                <div class="form-outline form-white mb-4 text-center">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <button type="submit" class="btn btn-outline-light mt-4 mb-2">{{__('Wyślij')}}</button>
                </div>
                <ul class="fa-ul" style="margin-left: 1.65em;">
                    <li class="mb-3">
                        <span class="fa-li"><i class="fa fa-envelope"></i></span><span class="ms-2">{{__('zooworld@example.com')}}</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fa fa-phone"></i></span><span class="ms-2">{{__('+ 48 123 456 789')}}</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">{{__('Godziny otwarcia')}}</h5>
                <table class="table text-center text-white">
                    <tbody class="font-weight-normal">
                    <tr>
                        <td>{{__('Poniedziałek - Piątek')}}</td>
                        <td>{{__('9:00 - 18:00')}}</td>
                    </tr>
                    <tr>
                        <td>{{__('Sobota - Niedziela')}}</td>
                        <td>{{__('9:00 - 19:00')}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; {{__('ZOO World - 2022')}}
    </div>
</footer>
</body>
</html>
