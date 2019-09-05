@extends('admin.layout.app')
@section('content')
    <div class="page-body">

        <div class="card">
                <div class="card-header">
                        <h5>`New` Constructor</h5>
                        <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                </ul>
                        </div>
                </div>
                <div class="card-block">
                        <div class="dt-responsive table-responsive">
                                <table id="new-cons" class="table table-striped table-bordered nowrap">
                                        <thead>
                                                <tr>
                                                        <th>First name</th>
                                                        <th>Last name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                        <th>Extn.</th>
                                                        <th>E-mail</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>5421</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3c79ddddacbdcddf3d7d2c7d2c7d2d1dfd6c09dddd6c7">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Garrett</td>
                                                        <td>Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                        <td>8422</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ee9a0f9e7e0faebfcfdceeaeffaeffaefece2ebfda0e0ebfa">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Ashton</td>
                                                        <td>Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                        <td>1562</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="23420d404c5b63474257425742414f46500d4d4657">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Cedric</td>
                                                        <td>Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                        <td>6224</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba8e5a0aea7a7b28bafaabfaabfaaa9a7aeb8e5a5aebf">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Airi</td>
                                                        <td>Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                        <td>5407</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b0ffa2b0a5bea491b5b0a5b0a5b0b3bdb4a2ffbfb4a5">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Brielle</td>
                                                        <td>Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                        <td>4804</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5c78bd2ccc9c9ccc4c8d6cacbe5c1c4d1c4d1c4c7c9c0d68bcbc0d1">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Herrod</td>
                                                        <td>Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                        <td>9608</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5830763b3039363c343d2a183c392c392c393a343d2b76363d2c">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Rhona</td>
                                                        <td>Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                        <td>6200</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e290cc8683948b86918d8ca2868396839683808e8791cc8c8796">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Colleen</td>
                                                        <td>Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                        <td>2360</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee8dc0869b9c9d9aae8a8f9a8f9a8f8c828b9dc0808b9a">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Sonya</td>
                                                        <td>Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                        <td>1667</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff8cd1998d908c8bbf9b9e8b9e8b9e9d939a8cd1919a8b">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Jena</td>
                                                        <td>Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                        <td>3814</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c387cec8c0c7ccdae9cdc8ddc8ddc8cbc5ccda87c7ccdd">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Quinn</td>
                                                        <td>Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                        <td>9497</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4c59ad2d8cddadaf4d0d5c0d5c0d5d6d8d1c79adad1c0">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Charde</td>
                                                        <td>Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                        <td>6741</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6b5f8bbb7a4a5beb7baba96b2b7a2b7a2b7b4bab3a5f8b8b3a2">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Haley</td>
                                                        <td>Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                        <td>3597</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ce4a2e7e9e2e2e9e8f5cce8edf8edf8edeee0e9ffa2e2e9f8">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Tatyana</td>
                                                        <td>Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                        <td>1965</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f581db939c818f859481879c969eb591948194819497999086db9b9081">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Michael</td>
                                                        <td>Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                        <td>1581</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c51124f55504a5d7c585d485d485d5e50594f12525948">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Paul</td>
                                                        <td>Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                        <td>3059</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e292cc809b9086a2868396839683808e8791cc8c8796">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Gloria</td>
                                                        <td>Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                        <td>1721</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8beca5e7e2ffffe7eecbefeaffeaffeae9e7eef8a5e5eeff">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Bradley</td>
                                                        <td>Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                        <td>2558</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec8ec28b9e89899eac888d988d988d8e80899fc2828998">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Dai</td>
                                                        <td>Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                        <td>2290</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="44206a362d2b3704202530253025262821376a2a2130">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Jenette</td>
                                                        <td>Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                        <td>1937</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bad094d9dbd6decddfd6d6fadedbcedbcedbd8d6dfc994d4dfce">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Yuri</td>
                                                        <td>Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                        <td>6154</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b0255191e0909023b1f1a0f1a0f1a19171e0855151e0f">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Caesar</td>
                                                        <td>Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                        <td>8330</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99fab7eff8f7fafcd9fdf8edf8edf8fbf5fceab7f7fced">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Doris</td>
                                                        <td>Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                        <td>3023</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e88cc69f81848c8d9aa88c899c899c898a848d9bc6868d9c">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Angelica</td>
                                                        <td>Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                        <td>5797</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5c48bd7c4c8cad6e5c1c4d1c4d1c4c7c9c0d68bcbc0d1">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Gavin</td>
                                                        <td>Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>
                                                        <td>$92,575</td>
                                                        <td>8822</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2b5fcb8bdabb1b792b6b3a6b3a6b3b0beb7a1fcbcb7a6">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Jennifer</td>
                                                        <td>Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>
                                                        <td>$357,650</td>
                                                        <td>9239</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d29646f66696047636673667366656b627429696273">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Brenden</td>
                                                        <td>Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                        <td>1314</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90f2bee7f1f7fef5e2d0f4f1e4f1e4f1f2fcf5e3befef5e4">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Fiona</td>
                                                        <td>Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>
                                                        <td>$850,000</td>
                                                        <td>2947</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="51377f362334343f11353025302530333d34227f3f3425">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Shou</td>
                                                        <td>Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>
                                                        <td>$163,000</td>
                                                        <td>8899</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e093ce89948f95a0848194819481828c8593ce8e8594">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Michelle</td>
                                                        <td>House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>
                                                        <td>$95,400</td>
                                                        <td>2769</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="365b185e5943455376525742574257545a534518585342">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Suki</td>
                                                        <td>Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>
                                                        <td>$114,500</td>
                                                        <td>6832</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="04772a6671766f7744606570657065666861772a6a6170">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Prescott</td>
                                                        <td>Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                        <td>3606</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e1e400c0f1c1a020b1a1a2e0a0f1a0f1a0f0c020b1d40000b1a">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Gavin</td>
                                                        <td>Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>
                                                        <td>$235,500</td>
                                                        <td>2860</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="593e773a362b2d3c23193d382d382d383b353c2a77373c2d">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Martena</td>
                                                        <td>Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>
                                                        <td>$324,050</td>
                                                        <td>8240</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cfa2e1a2acacbdaeb68fabaebbaebbaeada3aabce1a1aabb">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Unity</td>
                                                        <td>Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>
                                                        <td>$85,675</td>
                                                        <td>5384</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f4a115d4a4b535a4d7f5b5e4b5e4b5e5d535a4c11515a4b">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Howard</td>
                                                        <td>Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>
                                                        <td>$164,500</td>
                                                        <td>7031</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff97d1979e8b99969a939bbf9b9e8b9e8b9e9d939a8cd1919a8b">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Hope</td>
                                                        <td>Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>
                                                        <td>$109,850</td>
                                                        <td>6318</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="274f094152424953425467434653465346454b425409494253">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Vivian</td>
                                                        <td>Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>
                                                        <td>$452,500</td>
                                                        <td>9422</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="21570f49405353444d4d61454055405540434d44520f4f4455">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Timothy</td>
                                                        <td>Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>
                                                        <td>$136,200</td>
                                                        <td>7580</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed99c3808282838894ad898c998c998c8f81889ec3838899">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Jackson</td>
                                                        <td>Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>
                                                        <td>$645,750</td>
                                                        <td>1042</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="264c0844544742554e475166424752475247444a435508484352">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Olivia</td>
                                                        <td>Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>
                                                        <td>$234,500</td>
                                                        <td>2120</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba4e5a7a2aaa5ac8bafaabfaabfaaa9a7aeb8e5a5aebf">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Bruno</td>
                                                        <td>Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                        <td>6222</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1c38fcfc0d2c9e1c5c0d5c0d5c0c3cdc4d28fcfc4d5">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Sakura</td>
                                                        <td>Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>
                                                        <td>$139,575</td>
                                                        <td>9383</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fc8fd2859d919d91938893bc989d889d889d9e90998fd2929988">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Thor</td>
                                                        <td>Walton</td>
                                                        <td>Developer</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>
                                                        <td>$98,540</td>
                                                        <td>8327</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="57237920363b23383917333623362336353b322479393223">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Finn</td>
                                                        <td>Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>
                                                        <td>$87,500</td>
                                                        <td>2927</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96f0b8f5f7fbf7f5fef9d6f2f7e2f7e2f7f4faf3e5b8f8f3e2">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Serge</td>
                                                        <td>Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>
                                                        <td>$138,575</td>
                                                        <td>8352</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="384b165a59545c4f5156785c594c594c595a545d4b16565d4c">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Zenaida</td>
                                                        <td>Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>
                                                        <td>$125,250</td>
                                                        <td>7439</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3943175f4b585752795d584d584d585b555c4a17575c4d">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Zorita</td>
                                                        <td>Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>
                                                        <td>$115,000</td>
                                                        <td>4389</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="215b0f52445353404f4e61454055405540434d44520f4f4455">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Jennifer</td>
                                                        <td>Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>
                                                        <td>$75,650</td>
                                                        <td>3431</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="254f0b44464a56514465414451445144474940560b4b4051">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Cara</td>
                                                        <td>Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                        <td>3990</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e1d500d0a1b081b100d3e1a1f0a1f0a1f1c121b0d50101b0a">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Hermione</td>
                                                        <td>Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                        <td>1016</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbb3f5b9aeafb7bea99bbfbaafbaafbab9b7bea8f5b5beaf">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Lael</td>
                                                        <td>Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                        <td>6733</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0cc8ec7d2c5c5d2e0c4c1d4c1d4c1c2ccc5d38ecec5d4">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Jonas</td>
                                                        <td>Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                        <td>8196</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="177d39767b726f767973726557737663766376757b726439797263">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Shad</td>
                                                        <td>Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                        <td>6373</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3b0eda7a6a0a8a6b183a7a2b7a2b7a2a1afa6b0edada6b7">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Michael</td>
                                                        <td>Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                        <td>5384</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45286b273730262005212431243124272920366b2b2031">[email&#160;protected]</a></td>
                                                </tr>
                                                <tr>
                                                        <td>Donna</td>
                                                        <td>Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                        <td>4226</td>
                                                        <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e98dc79a87808d8c9ba98d889d889d888b858c9ac7878c9d">[email&#160;protected]</a></td>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>
    </div>
@endsection