<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 헤드셋 현재사용내역</h3>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        목록
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th scope="col">사용자</th>
                            <th scope="col">제품명</th>
                            <th scope="col">기안문서번호</th>
                            <th scope="col">구매일</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($use_headset as $lt) {
                            ?>
                            <?php if (($lt->user_name) != '') {
                                ?>
                                <tr>
                                    <td>
                                        <b><?php echo $lt->user_name; ?></b>
                                    </td>
                                    <td>
                                        <?php echo $lt->product_name; ?>
                                    </td>
                                    <td>
                                        <?php echo $lt->gian_num; ?>
                                    </td>
                                    <td>
                                        <?php echo $lt->buy_day; ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
            </div>
    </section>





