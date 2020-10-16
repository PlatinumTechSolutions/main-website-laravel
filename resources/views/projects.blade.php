@extends('base')

@section('bodyHeaderText', 'Projects')

@section('body')

<section class="content">
  <div class="container projects projects-list">

    <div class="row">
      <a style="display: block; position: relative; top: -80px; visibility: hidden;" id="AWS"></a>
      <div class="col-sm-4">
        <div style="min-height: 90px; text-align: center; padding-top: 40px;">
          <img src="/img/projects/awsLogo.png" style="width: 200px;" alt="AWS" />
        </div>
      </div>
      <div class="col-sm-8">
        <p>Amazon Web Services (AWS) is a comprehensive, evolving cloud computing platform provided by Amazon. It provides a mix of infrastructure as a service (IaaS), platform as a service (PaaS) and packaged software as a service (SaaS) offerings.</p><p>AWS launched in 2006 from the internal infrastructure that Amazon.com built to handle its online retail operations. AWS was one of the first companies to introduce a pay-as-you-go cloud computing model that scales to provide users with compute, storage or throughput as needed.</p><p>AWS offers many different tools and solutions for enterprises and software developers that can be used in data centers in up to 190 countries. Groups such as government agencies, education institutions, nonprofits and private organizations can use AWS services.</p>
      </div>
    </div>

    <hr />

    <div class="row">
      <a style="display: block; position: relative; top: -80px; visibility: hidden;" id="ElasticSearch"></a>
      <div class="col-sm-4 order-sm-12">
        <div style="min-height: 90px; text-align: center; padding-top: 40px;">
          <img src="/img/projects/elasticSearchLogo.png" style="width: 200px;" alt="ElasticSearch" />
        </div>
      </div>
      <div class="col-sm-8 order-sm-1">
        <p>Elasticsearch is a distributed, open source search and analytics engine for all types of data, including textual, numerical, geospatial, structured, and unstructured. Elasticsearch is built on Apache Lucene and was first released in 2010 by Elasticsearch N.V. (now known as Elastic). Known for its simple REST APIs, distributed nature, speed, and scalability, Elasticsearch is the central component of the Elastic Stack, a set of open source tools for data ingestion, enrichment, storage, analysis, and visualization. Commonly referred to as the ELK Stack (after Elasticsearch, Logstash, and Kibana), the Elastic Stack now includes a rich collection of lightweight shipping agents known as Beats for sending data to Elasticsearch.</p>
      </div>
    </div>

    <hr />

    <div class="row">
      <a style="display: block; position: relative; top: -80px; visibility: hidden;" id="GDPR"></a>
      <div class="col-sm-4">
        <div style="min-height: 90px; text-align: center; padding-top: 40px;">
          <img src="/img/projects/gdprLogo.png" style="width: 200px;" alt="GDPR" />
        </div>
      </div>
      <div class="col-sm-8">
        <p>The General Data Protection Regulation (GDPR) is a legal framework that sets guidelines for the collection and processing of personal information from individuals who live in the European Union (EU). Since the Regulation applies regardless of where websites are based, it must be heeded by all sites that attract European visitors, even if they don't specifically market goods or services to EU residents.</p><p>The GDPR mandates that EU visitors be given a number of data disclosures. The site must also take steps to facilitate such EU consumer rights as timely notification in the event of personal data being breached. Adopted in April 2016, the Regulation came into full effect in May 2018, after a two-year transition period.</p>
      </div>
    </div>

    <hr />

    <div class="row">
      <a style="display: block; position: relative; top: -80px; visibility: hidden;" id="Symfony"></a>
      <div class="col-sm-4 order-sm-12">
        <div style="min-height: 90px; text-align: center; padding-top: 40px;">
          <img src="/img/projects/symfonyLogo.png" style="width: 200px;" alt="Symfony" />
        </div>
      </div>
      <div class="col-sm-8 order-sm-1">
        <p>Symfony aims to speed up the creation and maintenance of web applications and to replace repetitive coding tasks. It's also aimed at building robust applications in an enterprise context, and aims to give developers full control over the configuration: from the directory structure to the foreign libraries, almost everything can be customized. To match enterprise development guidelines, Symfony is bundled with additional tools to help developers test, debug and document projects.</p>
      </div>
    </div>

    <hr />

    <div class="row">
      <a style="display: block; position: relative; top: -80px; visibility: hidden;" id="WordPress"></a>
      <div class="col-sm-4">
        <div style="min-height: 90px; text-align: center; padding-top: 40px;">
          <img src="/img/projects/wordpressLogo.png" style="width: 200px;" alt="WordPress" />
        </div>
      </div>
      <div class="col-sm-8">
        <p>WordPress is a content management system (CMS) based on PHP and MySQL that is usually used with the MySQL or MariaDB database servers but can also use the SQLite database engine. Features include a plugin architecture and a template system, referred to inside WordPress as Themes. WordPress is most associated with blogging (its original purpose when first created) but has evolved to support other types of web content including more traditional mailing lists and forums, media galleries, membership sites, learning management systems (LMS) and online stores. WordPress is used by more than 60 million websites, including 33.6% of the top 10 million websites as of April 2019, WordPress is one of the most popular content management system (CMS) solutions in use. WordPress has also been used for other application domains such as pervasive display systems (PDS).</p>
      </div>
    </div>
  </div>
</section>
@stop
