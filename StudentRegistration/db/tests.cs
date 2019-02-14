using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Laraveltest
{
    #region Tests
    public class Tests
    {
        #region Member Variables
        protected int _id;
        protected string _title;
        protected string _body;
        protected unknown _created_at;
        protected unknown _updated_at;
        #endregion
        #region Constructors
        public Tests() { }
        public Tests(string title, string body, unknown created_at, unknown updated_at)
        {
            this._title=title;
            this._body=body;
            this._created_at=created_at;
            this._updated_at=updated_at;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Body
        {
            get {return _body;}
            set {_body=value;}
        }
        public virtual unknown Created_at
        {
            get {return _created_at;}
            set {_created_at=value;}
        }
        public virtual unknown Updated_at
        {
            get {return _updated_at;}
            set {_updated_at=value;}
        }
        #endregion
    }
    #endregion
}