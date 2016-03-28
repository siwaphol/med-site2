<!DOCTYPE html>
<html lang="en">

@include("partials._headcss")
<body>
  
@include("partials._navbar")

<div class="container-fluid">
<!--CMU LOGO-->
<a href="{{url("/")}}">
      <img  src="{{asset("images/logo2.png")}}"   width="400" height="100">
</a>
<br>
<!---end logo-->

<br>
<div class="row">

@include("partials._sidemenu")

      <!--End List-->
      <div class="col-md-10">
      <div class="row-md-6">
        <h4>Research</h4>
          <p style="font-size: 12px;">
          <hr>
            The traditional focus of the Department of Microbiology and Immunology has been on how microbes survive and cause disease in an animal or human host and how that host's immune system discriminates between self, friend (commensal microbes) and foe (pathogenic microbes).  In recent years, the Department has expanded this scope to also include related disciplines such as genetic pharmacology, regulation of gene expression and stem cell biology (e.g., through inclusion of the Baxter Lab).

            The juxtaposition of labs studying these diverse topics has provided trainees, staff and faculty with the cross-fertilization of disciplines necessary to understand some of the most interesting and complex interactions in biology.  The Department is highly interactive with an intensely collaborative environment that it shares with the rest of the School of Medicine and the Stanford campus as a whole.

            On the side of the microorganism, we study the growth and pathogenesis of viruses, bacteria, and protozoan parasites asking questions such as how do these organisms penetrate and survive in their chosen environment? How do they deal with the host's potent immune response? What distinguishes “good” microbes from “bad” and how do the two interact? What is responsible for latency/persistence and reactivation of infection?

            On the side of the host, we are asking questions such as how are self-antigens distinguished from non-self? How are antigens processed and presented to effector cells? What cascades follows antigen presentation? What roles do the various effector cells play in the host's immune response to different diseases? How does tolerance arise during development, how does it break down in autoimmunity and how can we interfere with these processes?

            Using a variety of microbial and host systems, we are also addressing fundamental questions of cell development and gene regulation.  For example, what determines a stem cell’s fate and how do cancer cells lose their self-control?  Gene expression, of course, is central to much of biology and many labs are asking how genes are regulated in complex environments, be they a developing (or infected!) mammal or a hostile physical environment such as a toxic waste dump.  Much of this work focuses on diving into novel mechanisms of gene regulation that were unimagined until just recently (e.g., unconventional ribosome initiation, microRNAs and the like). In 2002, the Department underwent its most recent expansion by inclusion of the Baxter Lab at Stanford. This is a group of faculty with interests that take us beyond our traditional focus in host and pathogen into even more diverse but complementary areas of biomedical research
          </p>
      </div>
      <hr>
      <br>

      </div>
    </div>

    
    <!--List Bottom-->
    <ul class ="pager">
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Maps & Directions</a></li>
    </ul>
  </div>
  <script src="{{asset("js/jquery.min.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/hoe.js")}}"></script>
</body>
</html>